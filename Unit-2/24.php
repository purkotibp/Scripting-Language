<?php
function convertLastThreeToUpperCase($str) {
    if (strlen($str) < 3) {
        return strtoupper($str);
    } else {
        $lastThree = strtoupper(substr($str, -3));
        $remaining = substr($str, 0, strlen($str) - 3);
        return $remaining . $lastThree;
    }
}

$input1 = "Nepal";
$input2 = "Npl";
$input3 = "Bca";
$input4 = "Bachelor";

echo "Input: \"$input1\" -> Output: \"" . convertLastThreeToUpperCase($input1) . "\"<br>";
echo "Input: \"$input2\" -> Output: \"" . convertLastThreeToUpperCase($input2) . "\"<br>";
echo "Input: \"$input3\" -> Output: \"" . convertLastThreeToUpperCase($input3) . "\"<br>";
echo "Input: \"$input4\" -> Output: \"" . convertLastThreeToUpperCase($input4) . "\"<br>";
?>
