<?php
    $display = [];
    $display = file_get_contents('data.json');
    $display = json_decode($display,true);
    if(!empty($display)){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $op = $_POST['operator'];
            $h = 0;
            $f = count($display);
            $m = floor(($h+$f)/2);
            if($op == '=' || $f == 1){
                echo '<br>thanks for play';
            }
            if($op == '>'){
                $display = array_slice($display,$m,ceil($f/2));
            }if($op == '<'){
                $display = array_slice($display,$h,ceil($f/2));
            }
        }
        $display = json_encode($display);
        file_put_contents('data.json',$display);
    }        
?>