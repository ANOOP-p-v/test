<?php
// Combination of 3 digit number with count
$len = (int)readline('Enter number of digits: ');
$input = array();
echo("Enter the digits :");
for($i=0;$i<$len;$i++){
    $input[$i]=readline();
}
$results = array();

$input = array_unique($input);  

sort($input);  

if ($input[0] === 0) {
    $input[] = array_shift($input);
}

$inputCount = count($input);
for( $i = 0; $i < $inputCount - 2; $i++) {
    for ($j = $i + 1; $j < $inputCount - 1; $j++) {
        for ($k = $j + 1; $k < $inputCount; $k++) {
            $results[] = $input[$i] . $input[$j] . $input[$k];
        }
    }
}
$count=0;
echo "Combinations ";
foreach ($results as $result) {
    echo $result . " ";
    $count++;
}
echo "\nCombinations count = ".$count;

?>