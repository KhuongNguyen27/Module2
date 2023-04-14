<?php
    class CustomException extends Exception
    {
        public function errorMessage(){
            $error = '';
            $error .= '<br> Lỗi xuất hiện tại file:'.$this->getFile();
            $error .= '<br> Lỗi xuất hiện tại dòng:'.$this->getLine();
            $error .= '<br> Nội dung: '.$this->getMessage();
            // return 'Error on line '.$this->getline().'in '.$this->getFile();
            return $error;
        }
    }
    $duong = 'Tốt';
    $thoitiet = 'Xấu';
    try{
        if($duong == 'Xấu'){
            throw new CustomException("Đi vòng");
        }
        if ($thoitiet == 'Xấu') {
            throw new Exception("Ở nhà");
            
        }
        echo 'Đi thằng ';
    }catch(CustomException $e){
        echo $e->errorMessage();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    finally{
        echo '<br>Về nhà';
    }
?>