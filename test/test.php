<?php
    $display = file_get_contents('viettel.json');
    $display = json_decode($display,true);
    $condition = '/^[0-9]{4,4}+\ [0-9]{3,3}+\ [0-9]{3,3}+$/';
    echo '<pre>';
    for ($i=0; $i < count($display) ; $i++) { 
        if(preg_match($condition,$display[$i])){
            $display[$i] = preg_replace("/\b[0-9 ]{8,8}\b$/",".xxx.xxx",$display[$i]);
            echo "$display[$i]<br>";
            // echo $display[$i]."\n";
            // $strdis = preg_split("/\ /",$display[$i]);
            // print_r($strdis);
        }
    }
        // $str = "Vi du ve ham preg_replace 21321 878"; 
        // $str = preg_replace("/\b[0-9]{3,3}\b/", "2000", $str);
    echo '</pre>';
   
?>