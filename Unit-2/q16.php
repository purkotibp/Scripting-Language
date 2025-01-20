<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Calculation</title>
</head>
<body>
    <h1>Calculate the Number of Cars Needed</h1>
    <form method="post" action="">
        <label for="people">Enter the number of people:</label>
        <input type="number" id="people" name="people" required>
        <br><br>
        <button type="submit">Calculate Cars</button>
    </form>

    <?php
    function calculateCarsNeeded($n) {
        return ceil($n / 5); // Round up to the nearest integer
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $people = $_POST['people'];
        $carsNeeded = calculateCarsNeeded($people);
        echo "<h2>For $people people, you need $carsNeeded cars.</h2>";
    }
    ?>
</body>
</html>
