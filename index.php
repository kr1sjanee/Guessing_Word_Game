<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Semantic Guessing Game</title>
</head>
<body>

<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Guessing Word</h1>
    </div>

    <form action="check_answer.php" method="post">
        <?php
        // Array of questions and corresponding answers
        $questions = array(
            "What is the capital of France?" => "Paris",
            "Which planet is known as the Red Planet?" => "Mars",
            "What is the largest mammal in the world?" => "Blue Whale",
            // Add more questions as needed
        );

        // Check if a new random question is requested
        $randomQuestion = isset($_POST['newQuestion']) ? array_rand($questions) : array_rand($questions);
        echo '<h2 class="text-center">' . $randomQuestion . '</h2>';
        echo '<input type="hidden" name="randomQuestion" value="' . htmlspecialchars($randomQuestion) . '">';
        ?>
        <div class="form-group">
            <label for="answer">Your Answer:</label>
            <input type="text" class="form-control" id="answer" name="answer" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit Answer</button>
    </form>

    <form action="index.php" method="post" class="mt-3">
        <input type="hidden" name="newQuestion" value="true">
        <button type="submit" class="btn btn-secondary btn-block">Play Again</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
