<?php
    $email = [
        'nguyenhuukhuong217102000@gmail.com',
        'a@gmail.com',
        'ab@yahoo.com',
        'abc@hotmail.com',
        '@gmail.com',
        'ab@gmail.',
        '@#abc@gmail.com'
    ];
    $condition = '/^[a-z0-9A-Z]+\@[a-z0-9A-Z]+\.[a-z0-9A-Z]+/';
    for ($i=0; $i < count($email) ; $i++) { 
        if (preg_match($condition,$email[$i])) {
            echo "$email[$i]<br>";
        }
    }
?>