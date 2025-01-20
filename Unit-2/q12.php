<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length Calculator</title>
</head>
<body>
    <h1>Recursive String Length Calculator</h1>
    <form method="post" action="">
        <label for="string">Enter a String:</label>
        <input type="text" id="string" name="string" required>
        <br><br>
        <button type="submit">Calculate Length</button>
    </form>

    <?php
    function recursiveStringLength($string) {
        if ($string === "") {
            return 0;
        }
        return 1 + recursiveStringLength(substr($string, 1));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string = $_POST['string'];
        $length = recursiveStringLength($string);
        echo "<h2>The length of the string \"$string\" is: $length</h2>";
    }
    ?>
</body>
</html>
