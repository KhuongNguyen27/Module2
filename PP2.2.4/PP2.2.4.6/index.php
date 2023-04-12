<?php
    function ranNum(){
        global $display;
        $checkArray = true;
        $number = rand(100,999);
        if(in_array($number,$display)){
            return ranNum();
        }else{
            return $number;
        }
    }  
    function checkArray($check,$x,$y){
        global $display;
        for($i=$x; $i < count($display); $i++){
                for($j=0; $j < count($display[$i]); $j++ ){
                    if($i==$x && $j == $y)
                        continue;
                    if($check == $display[$i][$j]){
                        echo '*****************<br>';
                        echo $i.' '.$j.'<br>';
                        array_splice($display[$i],$j,1,ranNum());
                        echo '*****************<br>';
                    }
                }
            }
        }
    $display = [];
    for($i = 0; $i < 20; $i++ )
        for($j = 0; $j < 10; $j++){
            $display[$i][$j] = ranNum();
        }
    echo '<pre>';
    echo '<b>Các vị trí đã xóa</b><br>';
    for($i = 0; $i < count($display); $i++ ){
        for($j =0; $j < count($display[$i]) ; $j++){
                checkArray($display[$i][$j],$i,$j);
            }
        }
    echo 'array =  <br>';
        foreach ($display as $numIn) {
            foreach ($numIn as $value) {
                echo $value.' ';
            }
            echo '<br>';
        }
        echo '</pre>';
    ?>