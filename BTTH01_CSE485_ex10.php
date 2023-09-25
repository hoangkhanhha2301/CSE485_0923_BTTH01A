<?php
    function convertToUppercase($arrs) {
        $result = array();
        foreach ($arrs as $arr){
            if (is_string($arr)) {
                $result[] = strtoupper($arr);
            } else {
                $result[] = $arr;
            }
        }
        return $result;
    }

    $arrs1 = ['1', 'b', 'c', 'd'];
    $arrs2 = ['a', 0, null, false];
    
    $result1 = (convertToUppercase($arrs1));
    $result2 = (convertToUppercase($arrs2));

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