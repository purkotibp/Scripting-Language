<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Power Calculator</h1>
    <form method="post" action="">
        <label for="voltage">Voltage (V):</label>
        <input type="text" id="voltage" name="voltage" required>
        <br><br>
        <label for="current">Current (I):</label>
        <input type="text" id="current" name="current" required>
        <br><br>
        <button type="submit">Calculate Power</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $voltage = $_POST['voltage'];
        $current = $_POST['current'];

        if (is_numeric($voltage) && is_numeric($current)) {
            $power = $voltage * $current;
            echo "<h2>Calculated Power: " . $power . " watts</h2>";
        } else {
            echo "<h2>Error: Both voltage and current must be numeric values.</h2>";
        }
    }
    ?>
</body>
</html>
