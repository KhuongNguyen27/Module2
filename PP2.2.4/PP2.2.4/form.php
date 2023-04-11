<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['username'];   
        $email = $_POST['email'];   
        $phone = $_POST['phone'];
        $saveValue = file_get_contents('user.json');
        $saveValue = json_decode($saveValue,true);
        $data['Name'] = $user;  
        $data['Email'] = $email;  
        $data['Phone'] = $phone;  
        $saveValue[] = $data;
        var_dump($saveValue);
        $json_data = json_encode($saveValue);
        if(!empty($json_data)){
            file_put_contents('user.json',$json_data);
            echo 'Đăng kí thành công';
        }}
?>