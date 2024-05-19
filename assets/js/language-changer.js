function changeLanguage(lang) {
    // Store the language preference in local storage
    localStorage.setItem('language', lang);

    // Update content based on the selected language
    updateContent(lang);
}

function updateContent(lang) {
    // Get all elements with the data-language attribute
    const elements = document.querySelectorAll('[data-language]');

    // Loop through each element and update its content
    elements.forEach((element) => {
        const dataLang = element.getAttribute('data-language');
        if (dataLang === lang) {
            element.style.display = 'block'; // Show the element
        } else {
            element.style.display = 'none'; // Hide the element
        }
    });
}

// Initially show content based on the stored language preference
const storedLanguage = localStorage.getItem('language') || 'en';
updateContent(storedLanguage);