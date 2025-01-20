<?php
function age_in_days($age_years) {
    return $age_years * 365;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Age to Days Calculator</title>
</head>
<body>
    <h1>Calculate Age in Days</h1>
    <form method="post">
        <label for="age_years">Enter age in years:</label>
        <input type="number" id="age_years" name="age_years" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $age_years = intval($_POST['age_years']);
        echo "<p>Age in days: " . age_in_days($age_years) . "</p>";
    }
    ?>
</body>
</html>
