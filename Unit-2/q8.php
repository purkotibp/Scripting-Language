<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Leg Counter</title>
</head>
<body>
    <h1>Animal Leg Counter</h1>
    <form method="post" action="">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" id="chickens" name="chickens" required>
        <br><br>
        <label for="cows">Number of Cows:</label>
        <input type="number" id="cows" name="cows" required>
        <br><br>
        <label for="pigs">Number of Pigs:</label>
        <input type="number" id="pigs" name="pigs" required>
        <br><br>
        <button type="submit">Calculate Total Legs</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chickens = $_POST['chickens'];
        $cows = $_POST['cows'];
        $pigs = $_POST['pigs'];

        if (is_numeric($chickens) && is_numeric($cows) && is_numeric($pigs)) {
            $totalLegs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);
            echo "<h2>Total Number of Legs: " . $totalLegs . "</h2>";
        } else {
            echo "<h2>Error: Please enter numeric values for all animals.</h2>";
        }
    }
    ?>
</body>
</html>
