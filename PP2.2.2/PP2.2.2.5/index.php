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
        // $array = array();
        for( $i=0 ; $i<3 ; $i++ ){
            for ($j=0; $j < 7 ; $j++) { 
                echo ' * ';
            }
            echo '<br>';
            }   
            // $array[$i] = ['0','0','0','0','0','0','0'];
        // for( $i=0 ; $i<3 ; $i++ ){
        //     echo '<pre>';
        //     print_r($array[$i]);
        //     echo '</pre>';
        //     }
    ?>
    <br><hr><br>
    <?php
        for( $i=0 ; $i<6 ; $i++ ){
            for ($j=0; $j <= $i ; $j++) { 
                echo ' * ';
            }
            echo '<br>';
            }
    ?>
    <br><hr><br>
    <?php
        $n=6;
        for( $i=0 ; $i<6 ; $i++ ){
            for ($j=$n; $j > 0 ; $j--) { 
                echo ' * ';
            }
            $n--;
            echo '<br>';
            }
    ?>
    <br><hr><br>
    <?php
        $n=6;
        for( $i=0 ; $i<6 ; $i++ ){
            for ($j=$n; $j > 0 ; $j--) { 
                echo ' * ';
            }
            $n--;
            echo '<br>';
            }
    ?>
</body>
</html>