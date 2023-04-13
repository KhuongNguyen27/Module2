
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="form.php" method="post">
        <label>
            <h1>Paint Table</h1>
        </label>    
        <label>
            <input type="text" name= "colspan" placeholder= "Insert colspan" min="1" max="10"><br>
        </label>
        <label>
            <input type="text" name= "rowspan" placeholder= "Insert rowspan"  min="1" max="10"><br>
        </label>
        <label>
            <input type="submit" value="Submit">
        </label>
    </form>
    </div>
</body>
</html>
