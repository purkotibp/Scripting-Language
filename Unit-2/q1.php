<?php
$integerVar = 10;
$floatVar = 10.5;
$stringVar = "Hello, World!";
$booleanVar = true;
$arrayVar = array(1, 2, 3, 4, 5);
$nullVar = null;

echo "Integer Value: " . $integerVar . "<br>";
echo "Float Value: " . $floatVar . "<br>";
echo "String Value: " . $stringVar . "<br>";
echo "Boolean Value: " . $booleanVar . "<br>";
echo "Null Value: " . $nullVar . "<br>";

print "<br>Using print:<br>";
print "Integer Value: " . $integerVar . "<br>";
print "Float Value: " . $floatVar . "<br>";
print "String Value: " . $stringVar . "<br>";
print "Boolean Value: " . $booleanVar . "<br>";
print "Null Value: " . $nullVar . "<br>";

echo "<br>Array Content using print_r:<br>";
print_r($arrayVar);

echo "<br><br>Array Content using var_dump:<br>";
var_dump($arrayVar);

echo "<br><br>Checking data types:<br>";
echo "Data type of integerVar: " . gettype($integerVar) . "<br>";
echo "Data type of floatVar: " . gettype($floatVar) . "<br>";
echo "Data type of stringVar: " . gettype($stringVar) . "<br>";
echo "Data type of booleanVar: " . gettype($booleanVar) . "<br>";
echo "Data type of arrayVar: " . gettype($arrayVar) . "<br>";
echo "Data type of nullVar: " . gettype($nullVar) . "<br>";
?>
<!-- https://github.com/Asmin-lamichhane/scripting-lab1 -->
<!--  -->