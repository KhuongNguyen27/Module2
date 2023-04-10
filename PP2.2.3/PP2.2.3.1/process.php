<?php
    $customerList = [
        "1" => [
            "name" => "Mai Văn Hoàn",
            "day_of_birth" => "1983/08/20",
            "address" => "Hà Nội",
            "profile" => "images/img1.jpg"],
        "2" => [
            "name" => "Nguyễn Văn Nam",
            "day_of_birth" => "2000/08/21",
            "address" => "Bắc Giang",
            "profile" => "images/img2.jpg"],
        "3" => [
            "name" => "Nguyễn Thái Hòa",
            "day_of_birth" => "1995/08/22",
            "address" => "Nam Định",
            "profile" => "images/img3.jpg"],
        "4" => [
            "name" => "Trần Đăng Khoa",
            "day_of_birth" => "1985/08/17",
            "address" => "Hà Tây",
            "profile" => "images/img4.jpg"],
        "5" => [
            "name" => "Nguyễn Đình Thi",
            "day_of_birth" => "1980/08/19",
            "address" => "Hà Nội",
            "profile" => "images/img5.jpg"]
        ];
    function searchDate($customers,$from,$to)
    {
        if(empty($from) || empty($to)){
            return $customers;
        }
        $count=0;
        $displayDate = [];
        foreach ($customers as $customer) {
            if(strtotime($customer['day_of_birth'])<strtotime($from)){
                continue;
            }
            if(strtotime($customer['day_of_birth'])>strtotime($to)){
                continue;
                }
            $displayDate[$count] = $customer;
            $count++;
            }
        return $displayDate;
    }    
    if( $_SERVER['REQUEST_METHOD'] = "POST" ){
            $from = $_POST['from'];
            $to = $_POST['to'];
            $displayDate = searchDate($customerList,$from,$to);
        }
        ?>