<?php
$display = array();
$col = rand(1,20);
$row = rand(1,20);
for ($i=0; $i < $col ; $i++) { 
    for ($j=0; $j < $row ; $j++) { 
        $display[$i][$j] = rand(1,100);
    }
}
function countValue($display,$value){
    $count = 0;
    for ($i=0; $i < count($display) ; $i++) { 
        for ($j=0; $j < count($display[$i]) ; $j++) {
            if($value == $display[$i][$j]){
                $count++;
            } 
        }
    }
    return $count;
} 
$value = rand(1,100);
$count = countValue($display,$value);
echo '<pre>';
echo 'Giá trị '.$value.' xuất hiện '.$count.' lần<br>';
echo 'Mảng kiểm tra: <br>';
for ($i=0; $i < $col ; $i++) { 
    for ($j=0; $j < $row ; $j++) { 
        echo $display[$i][$j].' ';
    }
    echo '<br>';
}
echo '</pre>';
?>