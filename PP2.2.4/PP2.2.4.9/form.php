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
        <input type="number" name='add' onchange='addArray();'>
        <input type="submit" value='Gửi'>
        <a href='delete.php'>Xóa</a>
    </form>
    <?php include 'process.php'; putArray(); ?>
</body>
</html>