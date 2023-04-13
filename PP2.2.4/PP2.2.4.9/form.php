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
        $count = 0;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $display = [];
            if(isset($_POST['colspan'])&& isset($_POST['rowspan'])){
                echo $_POST['colspan'].$_POST['rowspan'];
            }
            if(isset($_POST['add'])){
                $a=[];
               $R= $_POST['add'];
             
               array_push($a,$R);
               
            };
            print_r( $a);
            // if(isset($_POST['colspan']) && isset($_POST['rowspan'])){
            //     $col = $_POST['colspan'];
            //     $row = $_POST['rowspan'];
            // }else{
            //     $count++;
            //     $add = $_POST['add'];
            //     $display[] = $add;
            //     print_r($display);
            // }
        }    
    ?>
    <form action="" method="post">    
        <input type="text" name='add' onchange='addArray();'>
        <input type="submit" value='Gửi'>
    </form>
</body>
</html>