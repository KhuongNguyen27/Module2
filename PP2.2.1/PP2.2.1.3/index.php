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
       $khachhang  =  [
        "1" => [
            'Tên' => 'Mai Văn Hoàn',
            'Ngày sinh' => '1983-08-20',
            'Địa chỉ' => 'Hà Nội',
            'Ảnh' => '<img src="image/20160906144000.png" width=40px></img>'
        ],
        "2" => [
            'Tên' => 'Nguyễn Văn Nam',
            'Ngày sinh' => '1983-08-21',
            'Địa chỉ' => 'Hà Nội',
            'Ảnh' => '<img src="image/20160906151608 (1).png" width=40px></img>'
        ],
        "3" => [
            'Tên' => 'Nguyễn Thái Hòa',
            'Ngày sinh' => '1983-08-22',
            'Địa chỉ' => 'Hà Nội',
            'Ảnh' => '<img src="image/20160906151608.png" width=40px></img>'
        ],
        "4" => [
            'Tên' => 'Trần Đăng Khoa',
            'Ngày sinh' => '1983-08-02',
            'Địa chỉ' => 'Hà Nội',
            'Ảnh' => ''
        ]
       ] 
    ?>
    <table border 1>
        <tr>
            <th colspan="5"><h1>Danh sách khách hàng</h1></th>
        </tr>
        <tr class="lineFirst">
            <td><b>Id</b></td>
            <td><b>Tên</b></td>
            <td><b>Ngày sinh</b></td>
            <td><b>Địa chỉ</b></td>
            <td><b>Ảnh</b></td>
        </tr>
        <?php foreach($khachhang as $key =>$value): ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value['Tên'] ?></td>
                <td><?php echo $value['Ngày sinh'] ?></td>
                <td><?php echo $value['Địa chỉ'] ?></td>
                <td><?php echo $value['Ảnh'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>