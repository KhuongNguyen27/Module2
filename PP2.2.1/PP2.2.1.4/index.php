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
    <div class="search">
    <form method="post">
        <b>Search<b><br>
        <label>
            <input class="inputSearch" type="text" name="search" placeholder="Nhập từ cần tìm "/>
        </lable>
        <lable>
            <input type="submit" id="submid" value="Search">
        <lable>
    </form>
    </div>
    <?php
        $Tudien = [
            "Hello" => "Xin chao",
            "How" => "Như thế nào?",
            "Who" => "Ai?",
            "Where" => "Ở đâu?",
            "When" => "Khi nào?",
            "What" => "Cái gì?",
            "Which" => "Gì?"
        ];
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $word = $_POST['search'];
            $check = 0;
            foreach ($Tudien as $key => $value) {
                if($word == $key){
                    echo $key.' = '.$value.'<br>'; 
                    $check++;
                }
            }
            if ($check == 0)
                echo 'Not found value in Server';
        }
    ?>
</body>
</html>