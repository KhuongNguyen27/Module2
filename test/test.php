<?php
    // function ranNum(){
    //     return rand(1,100);
    // }
    // $array = [ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum()];
    // $n = count($array);
    // for( $i= 1 ; $i < $n; $i++ ){
    //     $pos = $i;
    //     while( $pos-1 >= 0 && $array[$pos] < $array[$pos-1] ){
    //                 $temp = $array[$pos];
    //                 $array[$pos]=$array[$pos-1];
    //                 $array[$pos-1]= $temp;
    //                 $pos--;
    //         } 
    //     }
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';
?>
<?php
    function ranNum(){
        return rand(1,100);
    }
    // $array = [ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum(),ranNum()];
    for ($i=0; $i < 10 ; $i++) { 
        $array[] = ranNum();
    }
    $n = count($array);
    for( $i = 0 ; $i < $n ; $i++ ) { 
        $min = $array[$i];
        $count = $i;
        for( $j = $i ; $j < $n ; $j++){
            if($min > $array[$j]){
                $min = $array[$j];
                $count = $j;
            }
        }
        $array[$count] = $array[$i];
        $array[$i] = $min;
    }
    echo '<pre>';
    print_r($array);
    echo '</pre>';
?>