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
        <input type="number" name='value' placeholder= 'Nhập vào vị trí cần kiểm tra' >
        <input type="submit" value="Kiểm tra">
    </form>
    <?php include 'process.php';
            try{
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $i = $_POST['value'];
                if($i > 100 || $i < 0){
                    throw new displayError('Please insert number >100 and <1');
                }else {
                    echo '<br> phần tử: '.$display[$i];
                }
                }
            }catch(displayError $e){
                echo $e->errorMessage();
            }

    ?>
</body>
</html>