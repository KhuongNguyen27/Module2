<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $money = $_POST['money'];
            $valueFirst = $_POST['moneyChange1'];
            $valueSecond = $_POST['moneyChange2'];
            $moneyProcess = 0;
            if($valueFirst == "VND" && $valueSecond == "USD"){
                $moneyProcess = $money / 23000;
                echo 'Từ '.$money.$valueFirst.' sang '.$moneyProcess.$valueSecond;
            }
            if($valueFirst == "USD" && $valueSecond == "VND"){
                $moneyProcess = $money * 23000;
                echo 'Từ '.$money.$valueFirst.' sang '.$moneyProcess.$valueSecond;
            }
            if($valueFirst == $valueSecond){
                $moneyProcess = $money;
                echo 'You insert same value money';
            }
        }
    ?>
</body>
</html>