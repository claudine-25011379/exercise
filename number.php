<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
<?php

$num1 = 10;
$num2 = 20;
$num3 = 5;

echo "Initial num1: $num1<br>";
echo "initial num2: $num2<br>";
echo "Initial num3: $num3<br>";

$max = max($num1, $num2, $num3);
$min = min($num1, $num2, $num3);

echo "Maximum value: $max<br>";
echo "Minimum value: $min<br>";

$num1++;
$num2--; 


echo "Incremented num1: $num1<br>";
echo "Decremented num2: $num2<br>";


?>
</body>
</html>