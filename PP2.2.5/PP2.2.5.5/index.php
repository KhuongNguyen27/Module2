<?php
    $matrix = [
        [0,1,1,2],
        [0,5,0,0],
        [2,0,3,3]
    ];
    echo '<pre>';
    $total = 0;
    echo 'Các khách sạn thỏa mãn yêu cầu:<br><br>';
    for ($i= 0; $i < count($matrix); $i++) { 
        for ($j=0; $j < count($matrix[$i]) ; $j++) { 
            if ($matrix[$i][$j] == 0) {
                continue;
            }
            if ($i==0) {
                $total += $matrix[$i][$j];
                echo 'Tầng: '.$i.', Phòng: '.$j.'<br>';
                echo 'Giá phòng: '.$matrix[$i][$j].'$<br><br>'; 
            }else {
            if ($matrix[$i-1][$j] != 0) {
                echo 'Tầng: '.$i.', Phòng: '.$j.'<br>';
                echo 'Giá phòng: '.$matrix[$i][$j].'$<br><br>'; 
                $total += $matrix[$i][$j];
                }
            }
        }
    }
    echo 'Tổng giá phòng thỏa mãn yêu cầu: '.$total.'$<br>';
    echo '</pre>';
?>