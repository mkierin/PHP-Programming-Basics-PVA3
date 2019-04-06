<?php

//  Aufgabe 1
//
// Implementieren Sie eine Funktion zaehleAusreiser, die die Anzahl Ausreiser in einem Array zählt und zurückliefert.  Die Funktion hat drei Parameter:
//
// Ein Array von Zahlen
// untereGraenze
// obereGraenze
// Ausreiser  sind Elemente aus dem Array  die Ausserhalb des Bereichs liegen, der durch die Parameter untereGraenze und obereGraenze definiert wird.


 $zahlen = array(5,4,5,6,3,3,200,1,3,4,5,8,-50);
 $obGrenze =10;
 $untGrenze=-10;

echo zahlenausreisser($zahlen,$obGrenze,$untGrenze);

function zahlenausreisser($zahlen,$obGrenze,$untGrenze){
 $ausreisser = array();
 foreach ($zahlen as $key => $value) {

if ($value > $obGrenze || $value < $untGrenze) {
  array_push($ausreisser,$value);
}

 }
 return count($ausreisser);
}

?>
