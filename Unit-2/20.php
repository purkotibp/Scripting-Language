<?php
function createNewString($str) {
    if (strlen($str) < 2) {
        return $str;
    } else {
        $frontTwo = substr($str, 0, 2);
        return str_repeat($frontTwo, 4);
    }
}

$input1 = "C Sharp";
$input2 = "JS";
$input3 = "a";

echo "Input: \"$input1\" -> Output: \"" . createNewString($input1) . "\"<br>";
echo "Input: \"$input2\" -> Output: \"" . createNewString($input2) . "\"<br>";
echo "Input: \"$input3\" -> Output: \"" . createNewString($input3) . "\"<br>";
?>
