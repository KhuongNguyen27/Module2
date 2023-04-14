<?php
    function findMinMax($display, $col, $row){
        $min = $display[0][0];
        $max = $display[0][0];
        for ($i=0; $i < $col ; $i++) { 
            for ($j=0; $j < $row ; $j++) { 
                if($min > $display[$i][$j]){
                    $min = $display[$i][$j];
                }
                if($max < $display[$i][$j]){
                    $max = $display[$i][$j];
                }
            }
        }
        return [$min,$max];
    }
    $display = array();
    $col = rand(1,10);
    $row = rand(1,10);
    for ($i=0; $i < $col ; $i++) { 
        for ($j=0; $j < $row ; $j++) { 
            $display[$i][$j] = rand(1,100);
        }
    }
    echo '<pre>Mảng kiểm tra: <br>';
    for ($i=0; $i < $col ; $i++) { 
        for ($j=0; $j < $row ; $j++) { 
            echo $display[$i][$j].' ';
        }
        echo '<br>';
    }
    $array = findMinMax($display,$col,$row);
    echo 'Max: '.$array[1].'<br>'; 
    echo 'Min: '.$array[0]; 
    echo '</pre>';
?>