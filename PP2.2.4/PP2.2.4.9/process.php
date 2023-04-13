<?php
function putArray(){
            $display = file_get_contents('user.json');
            $display = json_decode($display,true);
            $array = file_get_contents('array.json');
            $array = json_decode($array,true);
            // if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo '<pre>';
                if (isset($_POST['add'])){
                    echo '<br>Number add: '.$_POST['add'].'<br>';
                }
            if(!empty($display)){
                for( $i=0; $i < count($display); $i++){
                    for($j=0; $j< count($display[$i]); $j++){
                        echo $display[$i][$j].' ';
                        }
                    echo '<br>';
                } 
            echo '</pre>';
            if (count($display) == $array[1]) {
                header("Location: finish.php");
                }
            }
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //------------ Nhập dữ liệu vào từ 2 form index.html và form.php
            $array = file_get_contents('array.json');
            $array = json_decode($array,true);
            $display = file_get_contents('user.json');
            $display = json_decode($display,true);
            if (isset($_POST['colspan']) && isset($_POST['rowspan'])) {
                $col = $_POST['colspan'];
                $row = $_POST['rowspan'];
                $array[] = $col;
                $array[] = $row;
                $array = json_encode($array);
                file_put_contents('array.json',$array);
            }
            if (isset($_POST['add'])) {
                $add = $_POST['add'];
                if( count($array) < $array[0] +1 ){
                    echo 'add compelete'; 
                    $array[] = $add;
                    $array = json_encode($array);
                    file_put_contents('array.json',$array);
                }else {
                    echo 'add compelete<br>'; 
                    echo 'next colspan';
                    $array[] = $add;
                    $temp = array_slice($array,2);
                    $array = array_slice($array,0,2);
                    $display[] = $temp;
                    $array = json_encode($array);
                    $display = json_encode($display);
                    file_put_contents('array.json',$array);
                    file_put_contents('user.json',$display);
                }
            }
        }
?>