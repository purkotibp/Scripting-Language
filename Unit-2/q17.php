<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>
</head>
<body>
    <h1>Sum Calculator with Special Case</h1>
    <form method="post" action="">
        <label for="a">Enter first integer:</label>
        <input type="number" id="a" name="a" required>
        <br><br>
        <label for="b">Enter second integer:</label>
        <input type="number" id="b" name="b" required>
        <br><br>
        <button type="submit">Calculate Sum</button>
    </form>

    <?php
    function computeSum($a, $b) {
        if ($a === $b) {
            return 3 * ($a + $b); // Triple the sum if the values are the same
        } else {
            return $a + $b; // Regular sum if the values are different
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $result = computeSum($a, $b);
        echo "<h2>The result for $a and $b is: $result</h2>";
    }
    ?>
</body>
</html>
