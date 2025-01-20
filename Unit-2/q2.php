<?php
define("PI", 3.14159);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];

    if (is_numeric($radius) && $radius > 0) {
        $area = PI * pow($radius, 2);
        echo "The area of the circle with radius $radius is: $area";
    } else {
        echo "Please enter a valid positive number for the radius.";
    }
}
?>

<form method="post">
    <label for="radius">Enter the radius of the circle:</label>
    <input type="text" id="radius" name="radius" required>
    <input type="submit" value="Calculate Area">
</form>
