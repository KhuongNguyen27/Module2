<?php
    echo "<pre>";
    function  insertionSort($list) {
        for ($i=1; $i <count($list) ; $i++) { 
            $pos = $i;
                while ( $pos-1 >= 0 && $list[$pos] > $list[$pos-1] ) {
                    $temp = $list[$pos];
                    $list[$pos] = $list[$pos-1];
                    $list[$pos-1] = $temp;
                    $pos--;
                }    
            }
            return $list;
        }
   $array =   [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
   print_r(insertionSort($array));
   echo "</pre>";
?>
