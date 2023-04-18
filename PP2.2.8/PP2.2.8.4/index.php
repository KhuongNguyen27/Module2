<?php
    $array = [
        '(84)-(0978489648)',
        '(84)-(9978489648)',
        '(a8)-(22222222)',
    ];
    $condition = '/^\([0-9]{2,}+\)\-\([0]{1,}[0-9]{9,}+\)$/';
    for ($i=0; $i < count($array) ; $i++) { 
        if (preg_match($condition,$array[$i])) {
            echo "$array[$i]<br>";
        }
    }
?>