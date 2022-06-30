<?php
//Program to  list number that remains the same 

$start = (int)readline('Enter start point of the range: ');
$end = (int)readline('Enter end point of the range: ');

$num1 = 0;
$num2 = 0;
for ($i = $start; $i <= $end; $i++) {
    $num1 = $i;
    $num2 = 0;
    while ($num1 != 0) {
        $rem = $num1 % 10;
        $num1 = $num1 / 10;
        $num2 = $num2 * 10 + $rem;
    }

    if ($i == $num2)
    {
        echo $i ." ";
    }
             
}

?>