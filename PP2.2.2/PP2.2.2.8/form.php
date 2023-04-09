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
        <input type="text" name="input" placeholder="Insert number" >
        <input type="submit" value="Gửi">
    </form>
    <br>
    <?php
    function ktnguyento($input){
        $n = intval(sqrt($input));
        // var_dump($n);
        for( $i = 2 ; $i <= $n ; $i++)
        if ($input % $i == 0){
            return false;
        }
        return true;
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $value = $_POST['input'];
        $n = 0;
        for( $i=2 ; $i <= $value; $i++){
            if(ktnguyento($i)){
                $n++;
                echo 'Số nguyên tố : '.$i.';<br>';
        }}
        echo 'Có '.$n.' số nguyên số. ';
    }
    ?>
</body>
</html>