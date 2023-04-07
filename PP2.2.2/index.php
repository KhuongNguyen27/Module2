<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form method="post">
        <b>Chuyển số thành chữ</b>
        <input type="number" name="number" placeholder="Number" min="0" max="1000">
        <input type="submit" value="Chuyển">
    </form>
    </div>
    <?php
        $number10 =[
            '0' => 'zero',
            '1' => 'one',
            '2' => 'two',
            '3' => 'three',
            '4' => 'four',
            '5' => 'five',
            '6' => 'six',
            '7' => 'seven',
            '8' => 'eight',
            '9' => 'nine',
            '10' => 'ten'
        ];
        $number20 = [
            '1' => 'eleven',
            '2' => 'twelve',
            '3' => 'thirteen',
            '5' => 'fifteen'
        ];
        $numbertens = [
            '2' => 'twenty',
            '3' => 'thirty',
            '4' => 'forty',
            '5' => 'fifty',
            '6' => 'sixty',
            '7' => 'seventy',
            '8' => 'eighty',
            '9' => 'ninety',
        ];
        function numones($input){
            global $number10;
            foreach($number10 as $key => $value) {
                if($input == $key)
                return $value;
            }
        }
        function numtens($input){
            global $numbertens;
            foreach($numbertens as $key => $value) {
                if($input == $key)
                    return $value;
            }
        }
        function num11to19($input){
            global $number20;
            $ones = $input % 10;
            if($ones == 1 || $ones == 2 || $ones == 3 || $ones == 5 ){
                foreach ($number20 as $key => $value) {
                    if($ones == $key)
                    return $value;
                }}else {
                    return numones($ones).'teen';
                }
            }
        function num20to99($input){
            global $number10;
            global $numbertens;
            $ones = $input%10;
            $tens = intval($input/10);
            if($ones == 0){
                return numtens($tens);
            }else{
                return numtens($tens).'-'.numones($ones);
            }  
        }
        function num100to999($input){
            global $number10;
            global $numbertens;
            $num = intval(($input/10)/10);
            if(intval($input%100)=='00')
                return numones($num).' hundred';
            return numones($num).' hundred and '.num20to99(intval($input%100));
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $number = $_POST['number'];
            if($number <= 10){
                echo numones($number);
            }
            if($number <=19 && $number > 10){
                echo num11to19($number);        
            }
            if($number >=20 && $number< 99){
                echo num20to99($number);
            }
            if($number >=100 && $number< 1000){
                echo num100to999($number);
            }
        }  
    ?>
</body>
</html>