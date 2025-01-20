<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Divisibility by 5</title>
</head>
<body>
    <h1>Check if a Number is Divisible by 5</h1>
    <form method="post" action="">
        <label for="number">Enter an Integer:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <button type="submit">Check</button>
    </form>

    <?php
    function isDivisibleByFive($number) {
        return $number % 5 === 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if (is_numeric($number)) {
            if (isDivisibleByFive($number)) {
                echo "<h2>$number is evenly divisible by 5.</h2>";
            } else {
                echo "<h2>$number is not evenly divisible by 5.</h2>";
            }
        } else {
            echo "<h2>Please enter a valid integer.</h2>";
        }
    }
    ?>
</body>
</html>
