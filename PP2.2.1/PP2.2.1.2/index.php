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
        <div class = "login">
            <h1>Login</h1>
                <b>UserName:</b><br> <input type="text" name= "Username" placeholder="Username"><br>
                <b>Password:</b><br> <input type="password" name= "Password" placeholder="Password"><br>
                <input type="submit" value="Gửi">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo '<pre>';
            print_r( $_REQUEST );
            echo '</pre>';
    
            echo '<br>'. $_REQUEST['Username'];
            echo '<br>'. $_REQUEST['Password'];
    
            $username   = $_REQUEST['Username'];
            $password   = $_REQUEST['Password'];
    
            if( $username == 'admin' && $password == '123' ){
                echo '<br>Welcome admin to website';
            }else{
                echo '<br>Login Error';
            }
            
        }
    ?>
</body>
</html>