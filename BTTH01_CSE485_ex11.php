<?php
    $array = array(1, 2, 3, 4, 5);
    
    foreach ($array as $arr) {
        $length = strlen($arr);
    }
    
    echo "Mảng ban đầu<br>";
    echo "array (size = ".$length.")";
    echo "<pre>";
    print_r($array);
    echo "</pre;>";
    
    unset($array[3]);
    $array = array_values($array);

    foreach ($array as $arr) {
        $length = strlen($arr);
    }

    echo "sau khi xóa phần tử thứ 3 sẽ có kết quả như sau<br>";
    echo "array (size = ".$length.")";
    echo "<pre>";
    print_r($array);
    echo "</pre;>";
