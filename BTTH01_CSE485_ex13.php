<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $average = array_sum($numbers) / count($numbers);

    $greaterThanAverage = array_filter($numbers, function ($value) use ($average) {
        return $value > $average;
    });

    $lessThanOrEqualAverage = array_filter($numbers, function ($value) use ($average){
        return $value <= $average;
    });

    print_r("Giá trị trung bình: $average<br>");
    
    print_r("Các số lớn hơn giá trị trung bình:<br>");
    echo '<pre>';
    print_r($greaterThanAverage);
    echo '</pre;>';

    print_r("Các số nhỏ hơn hoặc bằng giá trị trung bình:<br>");
    echo '<pre>';
    print_r($lessThanOrEqualAverage);
    echo '</pre;>';