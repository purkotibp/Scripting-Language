<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find String Index</title>
</head>
<body>
    <h1>Find the Index of a String in an Array</h1>
    <form method="post" action="">
        <label for="array">Enter the Array (comma-separated):</label>
        <input type="text" id="array" name="array" required>
        <br><br>
        <label for="string">Enter the String:</label>
        <input type="text" id="string" name="string" required>
        <br><br>
        <button type="submit">Find Index</button>
    </form>

    <?php
    function findStringIndex($array, $string) {
        $index = array_search($string, $array);
        if ($index !== false) {
            return $index;
        } else {
            return -1;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arrayInput = $_POST['array'];
        $string = $_POST['string'];

        // Convert the comma-separated array input into an actual array
        $array = explode(",", $arrayInput);

        $index = findStringIndex($array, $string);
        if ($index !== -1) {
            echo "<h2>The string '$string' is found at index $index in the array.</h2>";
        } else {
            echo "<h2>The string '$string' is not found in the array.</h2>";
        }
    }
    ?>
</body>
</html>
