document.addEventListener('DOMContentLoaded', function() {
    // DOM elements
    const expenseForm = document.getElementById('expenseForm');
    const expenseName = document.getElementById('expenseName');
    const expenseAmount = document.getElementById('expenseAmount');
    const expenseDate = document.getElementById('expenseDate');
    const expenseList = document.getElementById('expenseList');
    const currencySelect = document.getElementById('currency');
    const currencySymbols = document.querySelectorAll('.currency-symbol');
    
    // Set default date to today
    expenseDate.valueAsDate = new Date();
    
    // Load expenses and currency preference
    loadExpenses();
    loadCurrencyPreference();
    
    // Event listeners
    expenseForm.addEventListener('submit', addExpense);
    currencySelect.addEventListener('change', updateCurrency);
    
    function addExpense(e) {
        e.preventDefault();
        
        const name = expenseName.value.trim();
        const amount = parseFloat(expenseAmount.value);
        const date = expenseDate.value;
        
        if (name && !isNaN(amount)) {
            const expense = {
                id: Date.now(),
                name,
                amount,
                date
            };
            
            saveExpense(expense);
            renderExpense(expense);
            updateComparisons();
            expenseForm.reset();
            expenseDate.valueAsDate = new Date(); // Reset date to today
        }
    }
    
    function saveExpense(expense) {
        let expenses = getExpenses();
        expenses.push(expense);
        localStorage.setItem('expenses', JSON.stringify(expenses));
    }
    
    function getExpenses() {
        return JSON.parse(localStorage.getItem('expenses')) || [];
    }
    
    function loadExpenses() {
        const expenses = getExpenses();
        expenseList.innerHTML = '';
        expenses.forEach(expense => renderExpense(expense));
        updateComparisons();
    }
    
    function renderExpense(expense) {
        const currency = currencySelect.value;
        const row = document.createElement('tr');
        row.className = 'expense-item';
        row.setAttribute('data-id', expense.id);
        row.innerHTML = `
            <td>${expense.name}</td>
            <td>${currency}${expense.amount.toFixed(2)}</td>
            <td>${formatDate(expense.date)}</td>
            <td>
                <button class="btn btn-sm btn-danger delete-btn">
                    <i class="bi bi-trash"></i>
                </button>
            </td>
        `;
        
        expenseList.appendChild(row);
        
        // Add event listener to delete button
        row.querySelector('.delete-btn').addEventListener('click', () => {
            deleteExpense(expense.id);
        });
    }
    
    function deleteExpense(id) {
        let expenses = getExpenses();
        expenses = expenses.filter(expense => expense.id !== id);
        localStorage.setItem('expenses', JSON.stringify(expenses));
        document.querySelector(`.expense-item[data-id="${id}"]`).remove();
        updateComparisons();
    }
    
    function updateComparisons() {
        const expenses = getExpenses();
        const currency = currencySelect.value;
        
        // Get current date info
        const now = new Date();
        const currentYear = now.getFullYear();
        const currentMonth = now.getMonth();
        const currentDate = now.getDate();
        const currentDay = now.getDay(); // 0 (Sunday) to 6 (Saturday)
        
        // Calculate start of this week (Sunday)
        const startOfThisWeek = new Date(currentYear, currentMonth, currentDate - currentDay);
        // Calculate start of last week
        const startOfLastWeek = new Date(startOfThisWeek);
        startOfLastWeek.setDate(startOfLastWeek.getDate() - 7);
        
        // Calculate start of this month
        const startOfThisMonth = new Date(currentYear, currentMonth, 1);
        // Calculate start of last month
        const startOfLastMonth = new Date(currentYear, currentMonth - 1, 1);
        
        // Filter expenses for different periods
        const thisWeekExpenses = expenses.filter(expense => {
            const expenseDate = new Date(expense.date);
            return expenseDate >= startOfThisWeek && expenseDate <= now;
        });
        
        const lastWeekExpenses = expenses.filter(expense => {
            const expenseDate = new Date(expense.date);
            return expenseDate >= startOfLastWeek && expenseDate < startOfThisWeek;
        });
        
        const thisMonthExpenses = expenses.filter(expense => {
            const expenseDate = new Date(expense.date);
            return expenseDate >= startOfThisMonth && expenseDate <= now;
        });
        
        const lastMonthExpenses = expenses.filter(expense => {
            const expenseDate = new Date(expense.date);
            return expenseDate >= startOfLastMonth && expenseDate < startOfThisMonth;
        });
        
        // Calculate totals
        const thisWeekTotal = thisWeekExpenses.reduce((sum, expense) => sum + expense.amount, 0);
        const lastWeekTotal = lastWeekExpenses.reduce((sum, expense) => sum + expense.amount, 0);
        const thisMonthTotal = thisMonthExpenses.reduce((sum, expense) => sum + expense.amount, 0);
        const lastMonthTotal = lastMonthExpenses.reduce((sum, expense) => sum + expense.amount, 0);
        
        // Update UI
        document.getElementById('thisWeekTotal').textContent = `${currency}${thisWeekTotal.toFixed(2)}`;
        document.getElementById('lastWeekTotal').textContent = `${currency}${lastWeekTotal.toFixed(2)}`;
        document.getElementById('thisMonthTotal').textContent = `${currency}${thisMonthTotal.toFixed(2)}`;
        document.getElementById('lastMonthTotal').textContent = `${currency}${lastMonthTotal.toFixed(2)}`;
        
        // Calculate and display comparisons
        displayComparison('weekly', thisWeekTotal, lastWeekTotal);
        displayComparison('monthly', thisMonthTotal, lastMonthTotal);
    }
    
    function displayComparison(type, currentTotal, previousTotal) {
        const container = document.getElementById(`${type}Comparison`);
        const currency = currencySelect.value;
        
        if (previousTotal === 0) {
            container.innerHTML = `<span class="text-muted">No ${type} data to compare</span>`;
            return;
        }
        
        const difference = currentTotal - previousTotal;
        const percentage = (Math.abs(difference) / previousTotal) * 100;
        
        let comparisonText = '';
        let comparisonClass = '';
        
        if (difference > 0) {
            comparisonText = `↑ ${currency}${difference.toFixed(2)} (${percentage.toFixed(1)}%) more than last ${type}`;
            comparisonClass = 'comparison-positive';
        } else if (difference < 0) {
            comparisonText = `↓ ${currency}${Math.abs(difference).toFixed(2)} (${percentage.toFixed(1)}%) less than last ${type}`;
            comparisonClass = 'comparison-negative';
        } else {
            comparisonText = `No change from last ${type}`;
            comparisonClass = 'text-muted';
        }
        
        container.innerHTML = `<span class="${comparisonClass}">${comparisonText}</span>`;
    }
    
    function loadCurrencyPreference() {
        const savedCurrency = localStorage.getItem('currency') || '₱';
        currencySelect.value = savedCurrency;
        updateCurrencySymbols(savedCurrency);
    }
    
    function updateCurrency() {
        const selectedCurrency = currencySelect.value;
        localStorage.setItem('currency', selectedCurrency);
        updateCurrencySymbols(selectedCurrency);
        loadExpenses(); // Refresh to update currency symbols
        updateComparisons(); // Update comparison displays
    }
    
    function updateCurrencySymbols(currency) {
        currencySymbols.forEach(symbol => {
            symbol.textContent = currency;
        });
    }
    
    function formatDate(dateString) {
        const options = { year: 'numeric', month: 'short', day: 'numeric' };
        return new Date(dateString).toLocaleDateString(undefined, options);
    }
});