<?php
function ranNum(){
        return rand(10,99);
}
function addLR(){
    global $display;
    $sumRight = 0;
    $sumLeft = 0;
    $j = count($display)-1;
    for ($i = 0; $i<count($display); $i++){
        $sumLeft += $display[$i][$i];
        $sumRight += $display[$i][$j];
        $j--;
    }
    return ['Tổng đường chéo trái: '.$sumLeft,'Tổng đường chéo phải: '.$sumRight];
}
$number = ranNum();
$display = [];
for ($i=0; $i < $number ; $i++) { 
    for ($j=0; $j < $number ; $j++) { 
        $display[$i][$j] = ranNum();
    }
}
echo '<pre>';
$total = addLR();
print_r($total);
for ($i=0; $i < $number ; $i++) { 
    for ($j=0; $j < $number ; $j++) { 
        echo $display[$i][$j].' ';
    }
    echo '<br>';
}
echo '</pre>';
?>