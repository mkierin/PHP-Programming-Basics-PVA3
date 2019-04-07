<?php
$numbers = array(4,5,6,7,4,3,4,5,6,7,8,9,87,65,43,23,12,34);

var_dump(heapsort($numbers));

function heapsort($numbers){
$sorted = array();
$big=0;
$pos=0;
$length = count($numbers);
for ($i=0; $i < $length; $i++) {
foreach ($numbers as $key => $value) {

  if ($big<$value) {
    $big=$value;
    $pos=$key;

  }

  }
  array_push($sorted,$big);
  array_splice($numbers,$pos,1);
  $big=0;
  $pos=0;
} return $sorted;
}

// array_push($sorted,$value2);
// array_splice($numbers,$key2,1);



 ?>
