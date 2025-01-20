<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator</title>
</head>
<body>
    <h1>Area Calculator for Triangle or Parallelogram</h1>
    <form method="post" action="">
        <label for="base">Base (decimal):</label>
        <input type="number" step="any" id="base" name="base" required>
        <br><br>
        <label for="height">Height (decimal):</label>
        <input type="number" step="any" id="height" name="height" required>
        <br><br>
        <label for="shape">Shape:</label>
        <select id="shape" name="shape" required>
            <option value="triangle">Triangle</option>
            <option value="parallelogram">Parallelogram</option>
        </select>
        <br><br>
        <button type="submit">Calculate Area</button>
    </form>

    <?php
    function calculateArea($base, $height, $shape) {
        if ($shape === "triangle") {
            return 0.5 * $base * $height; // Area of triangle
        } elseif ($shape === "parallelogram") {
            return $base * $height; // Area of parallelogram
        } else {
            return "Invalid shape. Please enter 'triangle' or 'parallelogram'.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $height = $_POST['height'];
        $shape = $_POST['shape'];

        $area = calculateArea($base, $height, $shape);
        echo "<h2>The area of the $shape is: $area</h2>";
    }
    ?>
</body>
</html>
