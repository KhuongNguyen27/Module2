<?php
    function numRan(){
        return rand(10,99);
    }
    $number1 = [numRan(),numRan(),numRan(),numRan(),numRan(),numRan(),numRan()];
    $number2 = [numRan(),numRan(),numRan(),numRan(),numRan(),numRan(),numRan()];
    $number3 = [];
    echo 'Cách 1: Sử dụng vòng lặp for cộng mảng ';
    echo '<pre>';
    echo 'Array 1 :';
    for( $i = 0; $i < count($number1)  ; $i++){
        echo $number1[$i].' ';
        $number3[] = $number1[$i];
    } echo '<br>';
    echo 'Array 2 :';
    for( $i = 0; $i < count($number2)  ; $i++){
        echo $number2[$i].' ';
        $number3[] = $number2[$i];
    } echo '<br>';
    echo 'Array add :';
    for( $i = 0; $i < count($number3)  ; $i++){
        echo $number3[$i].' ';
    }
    echo '</pre>';
    echo 'Cách 2: sử dụng hàm array_merge($data1,$data2)<br>';
    echo '<pre>';
    $number3 = [];
    if(empty($number3))
        echo 'Array add reset value<br>';
    $number3 = array_merge($number1,$number2);
    for( $i = 0; $i < count($number3)  ; $i++){
        echo $number3[$i].' ';
    }
    echo '</pre>'
?>