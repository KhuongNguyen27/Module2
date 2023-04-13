<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num" placeholder="Insert your colspan want total: ">
        <input type="submit" value='Check'>
        <a href='delete.php'>Xóa</a>
    </form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //------------ Nhập dữ liệu vào từ 2 form index.html và form.php
        $display = file_get_contents('user.json');
        $display = json_decode($display,true);
        $num = $_POST["num"];
        $total = 0;
        echo '<pre>';
        echo 'Mảng nhập vào: <br><br>';
        for( $i=0; $i < count($display); $i++){
                for($j=0; $j< count($display[$i]); $j++){
                    echo $display[$i][$j].' ';
                    }
                echo '<br>';
            } 
        echo '<br>Tổng cột cần tính: <br><br>';
        for ($i=0; $i < count($display); $i++) {
            $temp = $display[$i][$num-1];
            if ($temp == NULL){
                echo 'Mảng chứa chuỗi hoặc NULL, Vui lòng nhập lại';
                break;
            }else {
                $total += $temp;
            }    
            }
        echo $total;
        echo '</pre>';
}
?>