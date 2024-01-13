<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Result</title>
</head>

<body>

<!-- Modal -->
<div class="modal" tabindex="-1" id="resultModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Result</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
                    // Add more questions as needed
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
