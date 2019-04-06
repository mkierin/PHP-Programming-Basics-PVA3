<?php
$text = "abcdefghijklmnop";
$char ="e";

$pos = -1;

echo findtext($text, $char);

function findtext($text, $char)
{
    $check = "";
    $pos = -1;
    for ($i=0; $i < strlen($text); $i++) {
        $check = $text[$i];



        if ($check===$char) {
            $pos = $i;


            break;
        }
    }

    return $pos;
}
