<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length Comparison</title>
</head>
<body>
    <h1>Compare String Lengths</h1>
    <form method="post" action="">
        <label for="string1">Enter First String:</label>
        <input type="text" id="string1" name="string1" required>
        <br><br>
        <label for="string2">Enter Second String:</label>
        <input type="text" id="string2" name="string2" required>
        <br><br>
        <button type="submit">Compare</button>
    </form>

    <?php
    function areStringsEqualLength($string1, $string2) {
        return strlen($string1) === strlen($string2);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];

        if (areStringsEqualLength($string1, $string2)) {
            echo "<h2>The two strings have the same number of characters.</h2>";
        } else {
            echo "<h2>The two strings do not have the same number of characters.</h2>";
        }
    }
    ?>
</body>
</html>
