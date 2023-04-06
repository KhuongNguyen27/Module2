<?php
    $tusach = [
        '1' =>[
            'Tên' => 'Văn học',
            'Giá' => '12000'
        ],
        '2' =>[
            'Tên' => 'Sử học',
            'Giá' => '15000'
        ],
        '3' =>[
            'Tên' => 'Toán học',
            'Giá' => '18000'
        ]
        ];
    $book =[
        'khong' => 'van',
        'mot' => 'su',
        'hai' => 'dia'
    ];
    // echo $tusach['1']['ten'];
    // echo $tusach['2']['gia'];
    foreach ($book as $key => $value) {
        // $key và $value là biến tự do
        echo $key.' - '.$value.'<br>';
    }

    foreach ($tusach as $key => $books) {
        foreach ($books as $k => $v) {
            echo $k.' - '.$v.'<br>';
        }
    }
    foreach ($tusach as $book){
        echo $book['Tên'].' - '.$book['Giá'].'<br>'; 
    }
    echo "<pre>";
        print_r($tusach);
    echo "</pre>";

?>
