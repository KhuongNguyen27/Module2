<?php
    $array = [
        '123abc_',
        '_abc123',
        '______',
        '123456',
        'abcdefg.@',
        '12345',
        '1234_',
        'abcde'
    ];
    $condition = '/^[a-z0-9_]{6,}$/';
    for ($i=0; $i < count($array) ; $i++) { 
        if (preg_match($condition,$array[$i])) {
            echo "$array[$i]<br>";
        }
    }
?>