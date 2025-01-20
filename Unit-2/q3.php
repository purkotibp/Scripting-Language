<?php
function convertMinutesToSeconds($minutes) {
    return $minutes * 60;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $minutes = $_POST['minutes'];

    if (is_numeric($minutes) && $minutes >= 0) {
        $seconds = convertMinutesToSeconds($minutes);
        echo "$minutes minutes is equal to $seconds seconds.";
    } else {
        echo "Please enter a valid positive number for minutes.";
    }
}
?>

<form method="post">
    <label for="minutes">Enter the number of minutes:</label>
    <input type="text" id="minutes" name="minutes" required>
    <input type="submit" value="Convert to Seconds">
</form>
