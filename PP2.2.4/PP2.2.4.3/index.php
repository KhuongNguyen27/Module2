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
        <input type="text" name = 'firstNumber'>
        <select name='Operator'>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name ='secondNumber'>
        <input type="submit" value="Tính">
    </form>
    <?php 
    if(isset($value)){
    echo '<b> Kết quả : '.$value.'</b>';
    }?>
</body>
</html>
<?php
    function calculate($firstNum,$operator,$secondNum){
            if ($secondNum == 0 || ($firstNum == 0 && $y == $secondNum)) {
                throw new Exception("Cannot divide by zero!");
                }
            switch($operator){
                case '+':
                    return $firstNum+$secondNum;
                case '-':
                    return $firstNum-$secondNum;
                case '*':
                    return $firstNum*$secondNum;
                case '/':
                    return $firstNum/$secondNum;
                }
            }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstNum = $_REQUEST['firstNumber'];
        $operator = $_REQUEST['Operator'];
        $secondNum = $_REQUEST['secondNumber'];
        $value = calculate($firstNum,$operator,$secondNum);
        try {
            $value = calculate($firstNum,$operator,$secondNum);;
            echo "Result: " . $value.'<br>';
        }
        catch (Exception $e) {
            // In ra thông báo lỗi khi gặp ngoại lệ Exception
            echo "Error: " . $e->getMessage();
        }
        finally {
            // Chạy mã sau khi đã được xử lý ngoại lệ
            echo "End of program.";
        }
    }
?>