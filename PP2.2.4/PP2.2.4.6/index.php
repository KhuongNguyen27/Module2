<?php
    function ranNum($x=0,$y=0){
        global $display;
        $checkArray = 0;
        $number = rand(100,1000);
        for($i = 0; $i < count($display); $i++ ){
                for($j = 0; $j < count($display[$i]) ; $j++){
                        if($display[$i][$j] == $number)
                            $checkArray = 1;   
                    }
        }
        if ( $checkArray == 0 )
            return $number;
        else    
            ranNum();
    }         
    function checkArray($check,$x,$y){
        global $display;
        for($i=$x; $i < count($display); $i++){
                for($j=0; $j < count($display[$i]); $j++ ){
                    if($i==$x && $j == $y)
                        continue;
                    if($check == $display[$i][$j]){
                        array_splice($display[$i],$j,1,ranNum($i,$j));
                    }
                }
            }
        }
    $display = [];
    for($i = 0; $i < 10; $i++ )
        for($j = 0; $j < 5; $j++){
            $display[$i][$j] = ranNum();
        }
    echo '<pre>';
    for($i = 0; $i < count($display); $i++ ){
        for($j =0; $j < count($display[$i]) ; $j++){
                checkArray($display[$i][$j],$i,$j);
            }
        }
    echo 'array = [ <br>';
        for($i = 0; $i < count($display); $i++ ){
            sort($display[$i]);
            // print_r($display[$i]);
            for($j =0; $j < count($display[$i]) ; $j++){
                echo $display[$i][$j].', ';
        }
        echo '<br>';
    }
    echo '</pre>';
    ?>