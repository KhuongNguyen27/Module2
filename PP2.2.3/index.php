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
    <form class='header' action='' method='post'>
                <label>
                    <b>Chọn ngày sinh từ: </b>
                    <input class='submitValue' type="date" name="from" id="">
                </label>
                <label>
                    <b>đến: </b>
                    <input class='submitValue' type="date" name="to" id="">
                </label>
                <label>
                    <input class='submitButton' type="submit" value ='Lọc'>
                </label>
            </form>
            <?php include 'process.php'; ?>
    <table  class='customerList' style='border-collapse: collapse;'>
        <tr>
            <th style="background-color: skyblue;" colspan='5'><h1>Danh sách khách hàng</h1></th>
        </tr>
        <tr style="border: 1px; font-size: 20px;">
            <td style='border-bottom: 1px solid salmon;'><b>STT</b></td>
            <td style='border-bottom: 1px solid salmon;'><b>Tên</b></td>
            <td style='border-bottom: 1px solid salmon;'><b>Ngày sinh</b></td>
            <td style='border-bottom: 1px solid salmon;'><b>Địa chỉ</b></td>
            <td style='border-bottom: 1px solid salmon;'><b>Ảnh</b></td>  
        </tr>
        <?php foreach ($displayDate as $stt => $infor): ?>
            <tr style='border-bottom: 1px solid salmon; height : 50px;'>
                <td><?php echo $stt?></td>
                <td><?php echo $infor['name']?></td>
                <td><?php echo $infor['day_of_birth']?></td>
                <td><?php echo $infor['address']?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>