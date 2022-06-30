<?php
// function to  find the revese of given String
function Reverse($str){
    for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) 
    {
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
    }
    return $str;
}
  

$str = (string)readline("Enter the String to find revese: ");
print_r(Reverse($str));
?>