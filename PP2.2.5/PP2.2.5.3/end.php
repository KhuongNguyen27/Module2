<?php    
    $display = file_get_contents('data.json');
    $display = json_decode($display,true);
    $h = 0;
    $f = count($display);
    $m = floor(($h+$f)/2);
    echo '<pre>';
    if($f==1){
        echo 'Your number, right? ';
    }
    echo $display[$m]-1;'<br>';
    echo '</pre>';
?>