<?php
function getValueAtIndex($array, $index) {
    if (isset($array[$index])) {
        return $array[$index]; // Return the value at the given index
    } else {
        return "Index out of bounds."; // Return an error message if the index is invalid
    }
}

// Example usage
$array = ["apple", "banana", "cherry", "date"];
$index = 2;

$value = getValueAtIndex($array, $index);
echo "The value at index $index is: $value";
?>
