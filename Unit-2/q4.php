<?php
function sumTwoNumbers($num1, $num2) {
    return $num1 + $num2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2)) {
        $sum = sumTwoNumbers($num1, $num2);
        echo "The sum of $num1 and $num2 is: $sum";
    } else {
        echo "Please enter valid numbers.";
    }
}
?>

<form method="post">
    <label for="num1">Enter the first number:</label>
    <input type="text" id="num1" name="num1" required>
    <br>
    <label for="num2">Enter the second number:</label>
    <input type="text" id="num2" name="num2" required>
    <br>
    <input type="submit" value="Calculate Sum">
</form>
