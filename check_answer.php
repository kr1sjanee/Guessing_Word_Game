<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>Result</title>
</head>

<body>

<!-- Modal -->
<div class="modal animated fadeIn" tabindex="-1" id="resultModal">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Result</h2>
            </div>

            <div class="modal-body">
                <?php
                // Retrieve user's answer from the form
                $userAnswer = isset($_POST['answer']) ? trim($_POST['answer']) : '';

                // Retrieve the random question from the form
                $randomQuestion = isset($_POST['randomQuestion']) ? $_POST['randomQuestion'] : '';

                // Array of questions and corresponding answers
                $questions = array(
                    "What is the capital of France?" => "Paris",
                    "Which planet is known as the Red Planet?" => "Mars",
                    "What is the largest mammal in the world?" => "Blue Whale",
                    "What is the capital of Philippines?" => "Manila",
                    "What is the process of finding and fixing errors in a program?" => "Debug",
                    " What type of loop repeats a block of code while a specified condition is true?" => "While",
                    "In programming, what is a collection of related data items called?" => "Array",
                    "What is the result of 2 + 2 in most programming languages?" => "4",
                    "What is the symbol of gold in periodic table?" => "Au",
                    "What is the biggest star?" => "Sun",
                    "What is the largest planet in our solar system?" => "Jupiter",
                    "What is the primary purpose of a 'for' loop in programming?" => "Iteration",
                    "In web development, what does CSS stand for?" => "Cascading",
                    " What data type is used for whole numbers in many programming languages?" => "Integer",
                    "Which programming language is often used for server-side web development?" => "Node.js",
                    "What is the default file extension for a Python script?" => "py",
                    "What is the result of dividing any number by zero in mathematics?" => "Undefined",
                    "In web development, what language is used to style the presentation of a webpage?" => "CSS",
                );

                // Get the correct answer for the displayed question
                $correctAnswer = $questions[$randomQuestion];

                // Display result in modal
                if (strcasecmp($userAnswer, $correctAnswer) === 0) {
                    echo '<div class="alert alert-success" role="alert">
                            Congratulations! Your answer is correct.
                          </div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                            Incorrect. The correct answer is: ' . $correctAnswer . '
                          </div>';
                }
                ?>
            </div>

            <div class="modal-footer">
                <a href="index.php" class="btn btn-primary">Play Again</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Trigger the modal -->
<script>
    $(document).ready(function () {
        $('#resultModal').modal('show');
    });
</script>

</body>

</html>
