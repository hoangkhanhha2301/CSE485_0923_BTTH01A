<?php
    function convertToLowercase($array) {
        $result = array();
        foreach ($array as $arr){
            if (is_int($arr)) {
                $result[] = $arr;
            } else {
                $result[] = strtolower($arr);
            }
        }
        return $result;
    }

    $arrs1 = ['1', 'B', 'C', 'E'];
    $arrs2 = ['a', 0, null, false];
    
    $result1 = (convertToLowercase($arrs1));
    $result2 = (convertToLowercase($arrs2));

    echo "Mảng 1 sau khi chuyển sẽ là ";
    echo "<pre>";
    print_r($result1);
    echo "<br>";
    echo "</pre;>";

    echo "Mảng 2 sau khi chuyển sẽ là ";
    echo "<pre>";
    print_r($result2);
    echo "<br>";
    echo "</pre;>";
    echo "<br>";