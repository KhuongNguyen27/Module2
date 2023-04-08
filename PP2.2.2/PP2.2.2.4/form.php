<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .main{
        text-align : center;
        margin-left: 40px;
        margin-top: 40px;
        width: 220px;
        height: 30px;
        font-size: 20px;
        color : black;
        background-color: skyblue;
        border : 2px solid red;
        padding : 2px;
        }
    </style>
</head>
<body>
    <div class= "main">
        <b style='font-size: 20px' >Kết quả là: </b>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $numFirst = $_POST['numFirst'];
            $numOperator = $_POST['operator'];
            $numSecond = $_POST['numSecond'];
            $total = $numFirst.' '.$numOperator.' '.$numSecond.' = ';
            switch (true) {
            case ($numOperator == '+'):
                echo $total.($numFirst + $numSecond);
                break;
            case ($numOperator == '-'):
                echo $total.($numFirst - $numSecond);
                break;
            case ($numOperator == '*'):
                echo $total.($numFirst * $numSecond);
                break;
            case ($numOperator == '/'):
                echo $total.($numFirst / $numSecond);
                break;
            case ($numOperator == '%'):
                echo $total.($numFirst % $numSecond);
                break;
            default:
                echo 'Error';
                break;
            }
        }
    ?>
    </div>
</body>
</html>