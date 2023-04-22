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
            <input type="text" name="country" placeholder="Country">
            <input type="text" name="medal" placeholder="Medal">
            <br>
            <a href="delete.php">Xóa</a>
            <input type="submit" value="Submit">
        </form>
    </body>
    </html>
    <?php
    
    function sortRank($array){
        $length = count($array);
        for ($i=0; $i < $length ; $i++) {
            $max = $array[$i]; 
            for ($j=$i; $j < $length ; $j++) { 
                if (isset($array[$j+1]) && $array[$j][1]<$array[$j+1][1]) {
                    $temp = $array[$j];
                    $array[$j]=$array[$j+1];
                    $array[$j+1] = $temp;
                }
            }
        }
        return $array;
    }
    function display($array){
        $length = count($array);
        for ($i=0; $i < $length ; $i++) { 
                if ($i==0) {
                    echo "Giải Nhất Olympic : ".$array[$i][0]." <br>  Với số huy chương : ".$array[$i][1].'<br><br>';
                }
                if ($i==1) {
                    echo "Giải Nhì Olympic : ".$array[$i][0]." <br>  Với số huy chương : ".$array[$i][1].'<br><br>';
                }
                if (($i>1)) {
                    echo "Nước tham dự : ".$array[$i][0]." <br>  Với số huy chương : ".$array[$i][1].'<br><br>';
                }
            }
        }
    $olympic = file_get_contents('rank.json');
    $olympic = json_decode($olympic,true);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $country = $_POST['country'];
        $medal = $_POST['medal'];
        $olympic[] = [$country,$medal];
        $olympic = sortRank($olympic);
    }
    display($olympic);
    $olympic = json_encode($olympic);
    insertValue($olympic);
    file_put_contents('rank.json',$olympic);
    ?>