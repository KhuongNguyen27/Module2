<?php
    $display = [];
    $display = file_get_contents('data.json');
    $display = json_decode($display,true);
    if(empty($display)){        
        for ($i=0; $i < 100 ; $i++) { 
            $display[] = $i+1;
        }
        $h = 0;
        $f = count($display);
        $m = floor(($h+$f)/2);
        $display = json_encode($display);
        file_put_contents('data.json',$display) ;
    }
?>