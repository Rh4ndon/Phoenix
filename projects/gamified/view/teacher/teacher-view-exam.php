<!-- Header -->
<?php include 'header.php'; ?>

<!-- Session Check -->
<?php include '../../controllers/sessions.php'; ?>

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Top Navbar -->
    <?php include 'top-navbar.php'; ?>

    <!-- Dashboard Content -->
    <div class="container-fluid">




        <!-- Exams Table -->
        <div class="row mt-4">

            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Create Question <i class="fas fa-pencil-alt"></i></h5>
                    </div>
                    <div class="card-body">
                        <form action="../../controllers/create-question.php" method="POST">
                            <input type="hidden" name="quiz_id" value="<?php echo $_GET['id']; ?>">
                            <div class="form-group mb-3">
                                <label for="question">Question</label>
                                <input type="text" name="question" class="form-control" placeholder="Enter Question" required>
                            </div>


                            <div class="form-group mb-3">
                                <label for="points">Points</label>
                                <input type="number" name="points" class="form-control" placeholder="Enter Points" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="question_type">Question Type</label>
                                <select name="question_type" class="form-control" id="question_type" required>
                                    <option value="" disabled selected>Select Question Type</option>
                                    <option value="multiple_choice">Multiple Choice</option>
                                    <option value="true_false">True/False</option>
                                    <option value="short_text">Short Answer</option>
                                </select>
                            </div>

                            <!-- Container for dynamic content -->
                            <div id="question_options_container"></div>

                            <script>
                                const questionType = document.getElementById('question_type');
                                const optionsContainer = document.getElementById('question_options_container');

                                if (questionType) {
                                    questionType.addEventListener('change', function() {
                                        const selectedValue = questionType.value;
                                        optionsContainer.innerHTML = ''; // Clear previous content

                                        if (selectedValue === 'multiple_choice') {
                                            // Create form for multiple choice
                                            const options = ['A', 'B', 'C', 'D'];

                                            options.forEach(option => {
                                                // Create option input group
                                                const optionGroup = document.createElement('div');
                                                optionGroup.className = 'form-group mb-3';

                                                // Create label
                                                const label = document.createElement('label');
                                                label.textContent = `Option ${option}`;

                                                // Create input container
                                                const inputContainer = document.createElement('div');
                                                inputContainer.className = 'd-flex align-items-center';

                                                // Create text input
                                                const textInput = document.createElement('input');
                                                textInput.type = 'text';
                                                textInput.className = 'form-control me-2';
                                                textInput.name = `option_${option.toLowerCase()}`;
                                                textInput.placeholder = `Enter option ${option}`;
                                                textInput.required = true;

                                                // Create radio button for correct answer
                                                const radioInput = document.createElement('input');
                                                radioInput.type = 'radio';
                                                radioInput.name = 'correct_answer';
                                                radioInput.value = option.toLowerCase();
                                                radioInput.className = 'form-check-input';
                                                radioInput.required = true;

                                                // Create radio label
                                                const radioLabel = document.createElement('label');
                                                radioLabel.className = 'form-check-label ms-2';
                                                radioLabel.textContent = 'Correct';

                                                // Append elements
                                                inputContainer.appendChild(textInput);
                                                inputContainer.appendChild(radioInput);
                                                inputContainer.appendChild(radioLabel);

                                                optionGroup.appendChild(label);
                                                optionGroup.appendChild(inputContainer);

                                                optionsContainer.appendChild(optionGroup);
                                            });

                                        } else if (selectedValue === 'true_false') {
                                            // Create form for true/false
                                            const optionGroup = document.createElement('div');
                                            optionGroup.className = 'form-group mb-3';

                                            const label = document.createElement('label');
                                            label.textContent = 'Correct Answer';

                                            const trueOption = createRadioOption('true', 'True', 'correct_answer');
                                            const falseOption = createRadioOption('false', 'False', 'correct_answer');

                                            optionGroup.appendChild(label);
                                            optionGroup.appendChild(trueOption);
                                            optionGroup.appendChild(falseOption);

                                            optionsContainer.appendChild(optionGroup);
                                        }
                                        // For short_text, we don't need to add anything
                                    });
                                }

                                // Helper function to create radio options
                                function createRadioOption(value, text, name) {
                                    const container = document.createElement('div');
                                    container.className = 'form-check';

                                    const input = document.createElement('input');
                                    input.type = 'radio';
                                    input.name = name;
                                    input.value = value;
                                    input.id = value;
                                    input.className = 'form-check-input';
                                    input.required = true;

                                    const label = document.createElement('label');
                                    label.className = 'form-check-label';
                                    label.htmlFor = value;
                                    label.textContent = text;

                                    container.appendChild(input);
                                    container.appendChild(label);

                                    return container;
                                }
                            </script>


                            <div class="form-group mb-3">
                                <?php include '../../controllers/create-button.php'; ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">


                    <?php include '../../controllers/get-questions.php'; ?>



                </div>
            </div>
        </div>


    </div>
</div>


<!-- Footer -->
<?php include 'footer.php'; ?>