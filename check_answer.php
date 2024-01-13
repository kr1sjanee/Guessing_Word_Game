<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Result</title>
</head>
<body>

<div class="container mt-5 text-center">
    <h2>Result</h2>
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

    // Check if the user's answer is correct
    if (strcasecmp($userAnswer, $correctAnswer) === 0) {
        echo '<p class="text-success">Congratulations! Your answer is correct.</p>';
    } else {
        echo '<p class="text-danger">Incorrect. The correct answer is: ' . $correctAnswer . '</p>';
    }

    // Generate a new random question for the next round
    $newRandomQuestion = array_rand($questions);
    $_SESSION['randomQuestion'] = $newRandomQuestion;
    ?>
    <a href="index.php" class="btn btn-primary">Play Again</a>
</div>

</body>
</html>
