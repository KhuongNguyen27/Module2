<?php
    class displayError extends Exception{
        public function errorMessage(){
            $error = '';
            $error .= '<br>Lỗi file: '.$this->getFile();
            $error .= '<br>Lỗi dòng: '.$this->getLine();
            $error .= '<br>'.$this->getMessage();
            return $error;
        }
    }
    function ranNum(){
        return rand(1,100);
    }
    $display = [];
    for ($i=0; $i < 100 ; $i++) { 
        $display[] = ranNum();
    }
?>