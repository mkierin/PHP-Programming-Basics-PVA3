<?php

// Aufgabe 2
//
// Implementieren Sie eine Funktion laengsteReihe, die die Länge der längsten Reihe von gleichen Elementen in einem Array  zurückliefert. Eine Reihe ist eine Sequenz von 2 oder mehreren Elemente mit dem gleichen Wert, die nebeneinander liegen.
//
//  Beispiele
//
// Array List                         Rückgabewert der Methode
//
// (3 7 5)                                                   1
//
$zahlen1 = array(4,4,3,5,6,7,4,4);
$zahlen2 = array(1,2,3,4,5,5,5,6,7,8,9);

$zahlen = $zahlen2;

echo longestrow($zahlen);

function longestrow($zahlen){
  $amount = 0;
  $flag = 0;
foreach ($zahlen as $value) {
    foreach ($zahlen as $value2) {
        if ($value === $value2) {
            $amount++;

            if ($amount > $flag) {
                $flag = $amount;
            }
        }
    } $amount = 0;
} return $flag;
}
