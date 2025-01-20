<?php
function findLargestNumber($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

$input1 = 15;
$input2 = 25;
$input3 = 17;

echo "The largest number among $input1, $input2, and $input3 is: " . findLargestNumber($input1, $input2, $input3);
?>
