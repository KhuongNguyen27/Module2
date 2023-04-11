<?php 
   function findMin($array){
        $min = $array[0];
        for($i = 0; $i < count($array) ; $i++ ){
            $min = min($array[$i],$min);
        }
        var_dump($min);
        return $min;
    }
   function startArray($n){
    $array = [];
    for ($i = 0; $i < $n; $i++){
        $array[] = rand(1,100);
    }
    return $array;
   }
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num = $_REQUEST['number'];
    if(!empty($num)){
        $display = startArray($num);
        $min = $display[0];
        echo '<pre>';
        for( $i = 0; $i < count($display); $i++){
            echo $display[$i].' ';
            $min = min($display[$i],$min);
            }
            echo '<br>'.$min;
            }
    else{
        echo 'Insert value';
    }
    echo '</pre>';
    }
?>