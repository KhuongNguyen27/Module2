<?php
    $array = [
        'C0318G',
        'M0318G',
        'P0323A'
    ];
    $condition = '/^[C||A||P]+[0-9]{4,}+[G||H||I||K||L||M]$/';
    for ($i=0; $i < count($array) ; $i++) { 
        if (preg_match($condition,$array[$i])) {
            echo "$array[$i]<br>";
        }
    }
?>