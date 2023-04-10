<?php
    $a=['van','su','dia'];  
    
    unset($a[2]);
    echo '<pre>';
    print_r($a);
    echo 'Mảng có '.count($a).' phần tử'; //Đếm số phần tử trong mảng
    echo '</pre>';
    // xÓa phần tử thứ 2
    array_push($a,'toan');
    echo '<pre>';
    print_r($a);
    echo 'Mảng có '.count($a).' phần tử';
    echo '</pre>';
    // thêm giá trị cuối mảng
    array_unshift($a,'tieng anh');
    echo '<pre>';
    print_r($a);
    echo 'Mảng có '.count($a).' phần tử';
    echo '</pre>';
    // thêm giá trị đầu mảng
    echo '<pre>';
    for( $i=0 ; $i < count($a) ; $i++ )
        echo $a[$i].'</br>';
    echo '</pre>';
    // duyệt mảng

    //Khai báo mảng liên kết 
    $information = [
        'Khuong' => 50,
        'Hieu' => 50,
        'Phi' => 50,
        'Long' => 50,
        'Cuong' => 50,
    ];
    //truy cập ptu
    echo '<pre>';
    echo $information['Hieu'].'</br>';
    print_r($information);
    echo '</pre>';
    // thay đổi giá trị phần tử
    $information['Khuong'] = 40;
    echo '<pre>';
    print_r($information);
    echo '</pre>';
    // xóa phần tử theo chỉ số
    unset($information['Khuong']);
    echo '<pre>';
    print_r($information);
    echo '</pre>';
    // duyệt mảng
    echo '<pre>';
    foreach ($information as $key => $value) 
        echo 'Key = '.$key.', Value = '.$value.'<br>' ;
    echo '</pre>';
    //thêm phần tử vào mảng; 
    $information['tam'] = 23;
    echo '<pre>';
    print_r($information);
    echo '</pre>';
    $tusach = [
        ['van','su','dia'],
        ['toan','hoa','anh']
    ];
    //truy cập phần tử 
    echo '<pre>';
    echo  $tusach[0][1];
    echo '</pre>';
    // xóa phần tử 
    array_splice($tusach[1],1,1);
    unset($tusach[0][1]);
    // hàm splice xóa phần tử, đẩy giá trị phía sau lên
    // hàm unset xóa phần tử giữ lại vị trí ô
    echo '<pre>';
    print_r($tusach);
    echo '</pre>';
?>