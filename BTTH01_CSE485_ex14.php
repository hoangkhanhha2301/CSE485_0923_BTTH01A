<?php
    $array1 = [
        [77, 87],
        [23, 45]
    ];
    $array2 = ['giá trị 1', 'giá trị 2'];
    
    $mergedArray = array_map(function ($value1, $value2){
        return [$value2, ...$value1];
    }, $array1, $array2);

    echo '<pre>';
    print_r($mergedArray);
    echo '</pre;>';