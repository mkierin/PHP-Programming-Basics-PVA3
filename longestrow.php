<?php


$zahlen1 = array(4,4,3,5,6,7,4,4); // answer: 2 44
$zahlen2 = array(1,2,6,6,3,4,5,5,5,6,7,8,6,9); // answer: 3 555
$zahlen3 = array(4,4,5,5,3,2,1,7,7,7,7,4,4,5 ); // answer: 4  7777
// compare value 1 with the next value in line. If the same amount +1 of len
// if the len of the row is longer than the previous row then new flag amount

$zahlen = $zahlen3;

echo longestrow($zahlen);

function longestrow($zahlen)
{
    $amount = 1;
    $flag = 0;

    for ($a=0; $a < count($zahlen) ; $a++) {
        if ($zahlen[$a] === $zahlen[$a+1]) {
            $amount++;


            if ($amount > $flag) {
                $flag = $amount;
            }
        }
        if ($zahlen[$a] !== $zahlen[$a+1]) {
            $amount = 1;
        }
    }
    return $flag;
}
