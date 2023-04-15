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
        <b>Game đoán số <br></b>
        <select name="operator">
            <option value=">">></option>
            <option value="=">=</option>
            <option value="<"><</option>
        </select>
        <input type="submit" value="Check">
        <a href="delete.php">Play again</a>
        <b><br>Nhỏ hơn nhấn <<br></b>
        <b>Đoán đúng hơn nhấn =<br></b>
        <b>Lớn hơn nhấn ><br></b>
    </form>
    <?php include 'start.php';?>
    <?php include 'process.php';?>
    <?php include 'end.php';?>
</body>
</html>