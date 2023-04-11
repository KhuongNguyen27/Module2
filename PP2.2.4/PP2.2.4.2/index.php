<?php
    $array = [
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()],
        [numRan(),numRan(),numRan(),numRan(),numRan(),numRan()]
    ];
    function numRan(){
        return rand(10,99);
    } 
    function findMax(){
        global $array;
        $max = $array[0][0];
        echo 'Mảng ';
        echo '<pre>';
        for($i=0 ; $i < count($array) ; $i++){
            for($j=0 ; $j < count($array[$i]) ; $j++){
                $max = max($array[$i][$j],$max);
                echo $array[$i][$j].', ';
            }
            echo '<br>';
        }
        echo '</pre>';
        return $max;
    }
    echo '<pre>';
    echo 'Max = '.findMax();
    echo '</pre>';
    ?>