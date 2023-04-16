<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $phone = $_GET['phonenum'];
        $array = [];
        $array = explode(",",$phone);
        $lenght = count($array);
        echo '<pre>';
        $mobi = [];
        $vina = [];
        $viettel = [];
        for ($i=0; $i <$lenght ; $i++) { 
            $check = substr($array[$i],0,4);
            if ($check == '0888') {
                $vina[] = $array[$i];
            }
            if ($check == '0901') {
                $mobi[] = $array[$i];
            }
            if ($check == '0981') {
                $viettel[] = $array[$i];
            }
        }
        echo 'Lưu dữ liệu thành công<br>';
        print_r($vina);
        print_r($mobi);
        print_r($viettel);
        $vina = json_encode($vina);
        $mobi = json_encode($mobi);
        $viettel = json_encode($viettel);
        file_put_contents('vinaphone.json',$vina);
        file_put_contents('mobiphone.json',$mobi);
        file_put_contents('viettel.json',$viettel);
        echo '</pre>';
    }
?>
