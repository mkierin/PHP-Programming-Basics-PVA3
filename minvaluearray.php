<?php
$zahlen = array(0,1,4,5,6,7,8,9);
$min=0;
$min_array = array();
$pos=0;
for ($i=0; $i < 5; $i++) {
    for ($i=0; $i < count($zahlen); $i++) {
        foreach ($zahlen as $key => $value) {
            if ($value <= $min) {
                $min = $value;
                array_push($min_array, $value);
                array_splice($zahlen, $key,1);
            }
            else {
              $min = $value;
            }
        }
    }
}

var_dump($min_array);
