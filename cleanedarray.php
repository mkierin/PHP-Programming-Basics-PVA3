<?php


// Aufgabe 4
//
// Implementieren Sie eine Funktion zusammenfassen, die alle Elemente eines Arrays, die den gleichen Wert haben, auf ein Element zusammenfasst und eine neue, zusammengefasste Liste zurückliefert.
//
// Beispiel:
//
// Liste                  Zusammengefasste Liste
//
// (3 3 3 3)                     (3)
// (1 2 3)                        (1 2 3)
// ()                                ()

$zahlen1 = array(4,4,3,5,6,7,4,4);
$zahlen2 = array(1,2,3,4,5,5,5,6,7,8,9);

$zahlen = $zahlen2;

var_dump(cleanedarray($zahlen));

function cleanedarray($zahlen)
{
    $flag=0;
    foreach ($zahlen as $value) {
        foreach ($zahlen as $key2 => $value2) {
            if ($value === $value2) {
                $flag++;

                //  echo  $flag;
                if ($flag > 1) {
                    array_splice($zahlen, $key2, 1);
                }
            }
        }
        $flag = 0;
    }
    return $zahlen;
}
