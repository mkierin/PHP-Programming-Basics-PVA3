<?php

//box builder
$iboxheight=6;
$aboxwidth=6;
//   +-----------+
//   |           |
//   |           |
//   |           |
//   +-----------+
//   +--+
//   |  |
//   |  |
//   +--+

echo box_builder($iboxheight,$aboxwidth);


function box_builder($iboxheight,$aboxwidth){

$html = "<p>";
for ($i=1; $i <= $iboxheight; $i++) {

    //building box rows
    for ($a=1; $a <= $aboxwidth; $a++) {
        //build + in corners
    if (($i === 1 && $a === 1) || //corner top left
          ($i === 1 && $a === $aboxwidth)  ||  // corner top right
          ($i === $iboxheight && $a === 1)  ||  // corner bottom left
          ($i === $iboxheight && $a === $aboxwidth)) { // corner bottom right
      $html .= "+";
    }
        //build top and bottom
        if ($i === 1 || $i === $iboxheight) {
            if ($a !== 1 && $a !== $aboxwidth) {
              $html.= "-";
            }
        }
        //build walls
        if ($a === 1 || $a === $aboxwidth) {
            if ($i !== 1 && $i !== $iboxheight) {
                $html.= "|";
            }
        }
        if ($i !== 1 && $i !== $iboxheight) {
            if ($a !== 1 && $a !== $aboxwidth) {
                $html.= "&#x2000;";

            }
        }
    }
    $html.= "<br>";
  }
  $html.= "</p>";
   return $html;
} ?>
