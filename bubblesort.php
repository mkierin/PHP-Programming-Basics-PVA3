<?php
//Bubble sort


$numbers = array(4,5,6,7,4,3,4,5,6,7,8,9,87,65,43,23,12,34);


$length = count($numbers);
$a=0;
$temp=0;

while ($a <= $length) {

if ($numbers[$a]>$numbers[$a+1]) {
  //swap places of the two array values
  $temp= $numbers[$a];
  $numbers[$a]=$numbers[$a+1];
  $numbers[$a+1]=$temp;
  $a=0;


} else {
  $a++;
}

}
var_dump($numbers);

 ?>
