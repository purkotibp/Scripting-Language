<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Team Points Calculator</title>
</head>
<body>
    <h1>Football Team Points Calculator</h1>
    <form method="post" action="">
        <label for="wins">Number of Wins:</label>
        <input type="number" id="wins" name="wins" required>
        <br><br>
        <label for="draws">Number of Draws:</label>
        <input type="number" id="draws" name="draws" required>
        <br><br>
        <label for="losses">Number of Losses:</label>
        <input type="number" id="losses" name="losses" required>
        <br><br>
        <button type="submit">Calculate Total Points</button>
    </form>

    <?php
    function calculatePoints($wins, $draws, $losses) {
        return ($wins * 3) + ($draws * 1) + ($losses * 0);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wins = $_POST['wins'];
        $draws = $_POST['draws'];
        $losses = $_POST['losses'];

        if (is_numeric($wins) && is_numeric($draws) && is_numeric($losses)) {
            $totalPoints = calculatePoints($wins, $draws, $losses);
            echo "<h2>Total Points: " . $totalPoints . "</h2>";
        } else {
            echo "<h2>Error: Please enter numeric values for wins, draws, and losses.</h2>";
        }
    }
    ?>
</body>
</html>
