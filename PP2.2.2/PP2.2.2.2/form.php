<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		.table-class{
        border-collapse: collapse;
        width: 100%;
        }
        .table-class th, .table-class td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .table-class th {
            background-color: #b3ccff;
        }
	</style>
</head>
<body>
    <?php
        // session_start();
        if($_SERVER['REQUEST_METHOD']=='POST'){   
                $p = $_POST['firstMoney'];
                $r = $_POST['rateYear'];
                $t = $_POST['numberYear'];
                $display = pow(($p*(1+$r/4)),($t*4));
                // $_SESSION['display'] = $display;
                //  header('Location: index.html');
                $json = json_encode($display);
            }
            
            ?>
        <table class="table-class">
            <tr>
            <td>
                <?php echo 'kết quả là:' ?>
            </td>
            <td>
                <?php echo $json;?>
            </td>
        </tr>
        </table>
</body>
</html>