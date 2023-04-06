<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </form> 
        <!-- <?php 
            $txt = "Hello world!";
            $x = 5;
            $y = 10.5;
            // echo $x + $y;   
            // echo "My first PHP script!";
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                // echo"<pre>";
                // print_r( $_REQUEST );
                // echo "</pre>";
                echo '<br>'.$_REQUEST['username'];
                echo '<br>'.$_REQUEST['email'];
                echo '<br>'.$_REQUEST['password'];
                // echo "<br>";
                $username = $_REQUEST['username'];
                $email = $_REQUEST['email'];
                $password = $_REQUEST['password'];
                echo '<br>';
                if ($username == "admin" && $password == "123"){
                    echo 'U are wellcome';
                }else{
                    echo 'Đéo phải. Nhập lại';
                }
            }
            // echo '<pre>';
            // print_r($_SERVER);
            // echo '</pre>';
        ?> -->
<!-- <?php
            $x=5;
            function demo(){
                global $x ;
                $x = 6;
                echo $x + 1 .'<br>';
                };
            demo();  
            echo $x;
?> -->
<?php
    $A = true;
    $B = false;
    var_dump($A and $B);
    // bool(false)
    echo '<br>';
    var_dump($A or $B);
    // bool(true)
    echo '<br>';
    var_dump($A && $B);
    // bool(false)
    echo '<br>';
    var_dump($A || $B);
    // bool(true)
    echo '<br>';
    var_dump(!($A || $B));
    // bool(false)
    ?>
</body>
</html>