<?php
function addFirstThreeCharsToFrontAndBack($str) {
    $firstThree = strlen($str) < 3 ? $str : substr($str, 0, 3);
    return $firstThree . $str . $firstThree;
}

$input1 = "Python";
$input2 = "JS";
$input3 = "Code";

echo "Input: \"$input1\" -> Output: \"" . addFirstThreeCharsToFrontAndBack($input1) . "\"<br>";
echo "Input: \"$input2\" -> Output: \"" . addFirstThreeCharsToFrontAndBack($input2) . "\"<br>";
echo "Input: \"$input3\" -> Output: \"" . addFirstThreeCharsToFrontAndBack($input3) . "\"<br>";
?>
