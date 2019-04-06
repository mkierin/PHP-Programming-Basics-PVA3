<?php

// Aufgabe 3
//
// Ein Palindrom ist eine Zeichenkette, die von vorn und von hinten gelesen dasselbe ergibt. Implementieren Sie eine Funktion die für eine als Parameter übergebene Zeichenkette überprüft ob sie ein Palindrom ist. Falls ja, wird TRUE zurückgegeben, ansonsten FALSE.
// Malayalam
//Hannah


//check if the first and the last letter are true. If yes continue with +1 if not the break and echo not palindrom TRUE oder FALSE

$text = "hannah";
$length = strlen($text)-1;


var_dump(palindromcheck($text, $length));

function palindromcheck($text, $length)
{
    for ($i=0; $i < $length ; $i++) {
        if ($text[$i] !== $text[$length-$i]) {
            echo $text[$i] ." ".$text[$length-$i];
            echo "not palindrom";
            return false;
        }
    }
    echo "is palindrom";
    return true;
}
