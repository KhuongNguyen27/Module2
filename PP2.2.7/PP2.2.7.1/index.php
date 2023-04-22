<?php
    function divide($first,$second){
        if ($second === 0) {
            throw new Exception("Không thể chia 0");
        }
        return $first/$second;
    }
    try {
        echo divide(100,5)."<br>";
        echo divide(100,0)."<br>";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>