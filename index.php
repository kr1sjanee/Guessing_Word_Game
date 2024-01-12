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
    <h2>Semantic Guessing Game</h2>
    <form action="check_answer.php" method="post">
        <?php
        // Array of questions and corresponding answers
        $questions = array(
            "What is the capital of France?" => "Paris",
            "Which planet is known as the Red Planet?" => "Mars",
            "What is the largest mammal in the world?" => "Blue Whale",
            // Add more questions as needed
        );

        // Display a random question
        $randomQuestion = array_rand($questions);
        echo '<p>' . $randomQuestion . '</p>';
        ?>
        <div class="form-group">
            <label for="answer">Your Answer:</label>
            <input type="text" class="form-control" id="answer" name="answer" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Answer</button>
    </form>
</div>

</body>
</html>
