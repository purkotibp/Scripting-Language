<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absolute Difference Calculator</title>
</head>
<body>
    <h1>Calculate Absolute Difference</h1>
    <form method="post" action="">
        <label for="n">Enter value for n:</label>
        <input type="number" id="n" name="n" required>
        <br><br>
        <button type="submit">Calculate Difference</button>
    </form>

    <?php
    function computeAbsoluteDifference($n) {
        $difference = abs($n - 51); // Calculate the absolute difference

        if ($n > 51) {
            return 3 * $difference; // If n is greater than 51, return triple the absolute difference
        } else {
            return $difference; // Otherwise, return the absolute difference as is
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['n'];

        $result = computeAbsoluteDifference($n);
        echo "<h2>The result for n = $n is: $result</h2>";
    }
    ?>
</body>
</html>
