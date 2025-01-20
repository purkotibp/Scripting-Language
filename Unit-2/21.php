<?php
function addLastCharToFrontAndBack($str) {
    $lastChar = substr($str, -1);
    return $lastChar . $str . $lastChar;
}

$input1 = "Red";
$input2 = "Green";
$input3 = "1";

echo "Input: \"$input1\" -> Output: \"" . addLastCharToFrontAndBack($input1) . "\"<br>";
echo "Input: \"$input2\" -> Output: \"" . addLastCharToFrontAndBack($input2) . "\"<br>";
echo "Input: \"$input3\" -> Output: \"" . addLastCharToFrontAndBack($input3) . "\"<br>";
?>
