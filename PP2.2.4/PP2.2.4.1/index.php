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
    function findMin(){
        global $array;
        $min = $array[0][0];
        echo 'Mảng ';
        echo '<pre>';
        for($i=0 ; $i < count($array) ; $i++){
            for($j=0 ; $j < count($array[$i]) ; $j++){
                $min = min($array[$i][$j],$min);
                echo $array[$i][$j].', ';
            }
            echo '<br>';
        }
        echo '</pre>';
        return $min;
    }
    echo '<pre>';
    echo 'Min = '.findMin();
    echo '</pre>';
    ?>