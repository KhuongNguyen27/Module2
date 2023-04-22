<?php
    class divideZero extends Exception
    {
        public function _divide0(){
            return "Không thể chia 0";
        }
    }
    
    function divide($first,$second){
        if ($second === 0) {
            throw new divideZero();
        }
        return $first/$second;
    }
    try {
        echo divide(100,5)."<br>";
        echo divide(100,0)."<br>";
    } catch (divideZero $e) {
        echo $e->_divide0();
    }
?>