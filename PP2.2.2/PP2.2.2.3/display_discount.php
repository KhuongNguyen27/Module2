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
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        $description = $_POST['description'];     
        $cost = $_POST['cost'];
        $discount = $_POST['discount'];
        $amount = ($cost/100)*$discount;
        $discountPrice = $cost-$amount; 
        echo '<pre>';
        echo 'Discount Amount: '.$amount;
        echo '<br>';
        echo 'Discount Amount: '.$discountPrice;
        echo '<pre>';
    ?>
    <table>
        <tr class="tableTr">
            <td class='tableTd'> <b>discount :</b><?php echo $amount; ?><b>đ</b></td>
            <td class="tableTd"> <b>total: </b><?php echo $discountPrice; ?><b>đ</b><td>
        </tr>    
    </table>
</body>
</html>