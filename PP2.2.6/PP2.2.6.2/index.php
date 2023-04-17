<?php
    echo "<pre>";
    function selectionSort($list){
        for ($i=0; $i <count($list) ; $i++) { 
            for ($j=count($list)-1; $j > $i; $j--) { 
                if ($list[$j-1] > $list[$j]) {
                    $temp = $list[$j];
                    $list[$j] = $list[$j-1];
                    $list[$j-1] = $temp;
                }
            }
        }
        return $list;
    }
   $array =  [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
   print_r(selectionSort($array));
   echo "</pre>";
?>
