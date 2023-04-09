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
        function ktnguyento($input){
            $n = intval(sqrt($input));
            // var_dump($n);
            for( $i = 2 ; $i <= $n ; $i++)
                if ($input % $i == 0){
                    return false;
                }
            return true;
        }
        echo 'Số nguyên tố từ 1 đến 100:<br>';
        $stt = 0;
        for ($i=2; $i < 100; $i++) { 
            if(ktnguyento($i)){
                $stt++;
                echo $i.'<br>'; 
        }}
        echo 'có '.$stt.' số nguyên tố'
    ?>
</body>
</html>