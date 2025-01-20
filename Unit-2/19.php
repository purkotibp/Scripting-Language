<?php
function addIfToFront($str) {
    if (substr($str, 0, 2) === "if") {
        return $str;
    } else {
        return "if " . $str;
    }
}

$input1 = "if else";
$input2 = "else";
$input3 = "if";

echo "Input: \"$input1\" -> Output: \"" . addIfToFront($input1) . "\"<br>";
echo "Input: \"$input2\" -> Output: \"" . addIfToFront($input2) . "\"<br>";
echo "Input: \"$input3\" -> Output: \"" . addIfToFront($input3) . "\"<br>";
?>
