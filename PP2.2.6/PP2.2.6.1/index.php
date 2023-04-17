<?php
    echo "<pre>";
    function selectionSort($list){
        // sort($list);
        // return $list;
        // for ($i=0; $i <count($list) ; $i++) { 
        //     for ($j=count($list)-1; $j > $i; $j--) { 
        //         if ($list[$j-1] > $list[$j]) {
        //             $temp = $list[$j];
        //             $list[$j] = $list[$j-1];
        //             $list[$j-1] = $temp;
        //         }
        //     }
        // }
        // return $list;
        for ($i=0; $i <count($list) ; $i++) {
            $min = $list[$i];
            $pos = $i;
            for ($j=$i; $j < count($list) ; $j++) { 
                if ($min > $list[$j]) {
                    $min = $list[$j];
                    $pos = $j;
                }
            }
            $temp = $list[$i];
            $list[$i] = $list[$pos];
            $list[$pos] = $temp;
        }
        return $list;
    }
   $array = [1, 9, 4.5, 6.6, 5.7, -4.5];
   print_r(selectionSort($array));
   echo "</pre>";
?>