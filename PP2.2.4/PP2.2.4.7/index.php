<?php
    function ranNum()
    {
        return rand(1,100);
    }
    function findNemo($nemo){
        global $display;
        $array = [];
        for($i = 0; $i < count($display) ; $i++){
            for($j = 0; $j < count($display[$i]) ; $j++){
                    if($display[$i][$j] == $nemo){
                        $array[] = 'Hàng: '.$i.', Cột: '.$j;
                        $display[$i][$j] = '*'.$display[$i][$j].'*'; 
                    }
            }
        }
        return $array;
    }
    $display = [];
    $number = ranNum();
    $nemo = ranNum();
    for($i = 0; $i<$number ; $i++){
        for($j = 0; $j<$number ; $j++){
            $display[$i][$j] = ranNum();
        }
    }    
    echo '<pre>';
    echo 'Số cần tìm: '.$nemo.'<br>';
    $count = findNemo($nemo);
    echo 'Số lần xuất hiện: '.count($count).'<br>';
    echo 'Vị trí tìm thấy: ';  
    for($i = 0; $i< count($count); $i++){
        echo $count[$i].' ';
    }
    echo '<hr><br>';
    echo 'Mảng: <br>';
    for($i = 0; $i<$number ; $i++){
        for($j = 0; $j<$number ; $j++){
            echo $display[$i][$j].' ';
        }
        echo '<br>';
    }
    echo '</pre>';
?>