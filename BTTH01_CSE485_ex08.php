<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    $maxString = '';
    $minString = '';
    $maxLength = 0;
    $minLength = PHP_INT_MAX;

    foreach ($array as $arr) {
        $length = strlen($arr);

        if ($length > $maxLength){
            $maxString = $arr;
            $maxLength = $length;
        }

        if ($length < $minLength){
            $minString = $arr;
            $minLength = $length;
        }
    }

    echo "Chuỗi lớn nhất là $maxString, độ dài = $maxLength<br>";
    echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength";
