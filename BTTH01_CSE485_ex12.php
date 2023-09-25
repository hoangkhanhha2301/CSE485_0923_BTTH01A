<?php
    $numbers = [
        'key1' => 12, 
        'key2' => 30, 
        'key3' => 4, 
        'key4' => -123, 
        'key5' => 1234, 
        'key6' => -12565, 
       ];

    //Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng
    $firstElement = reset($numbers);
    $lastElement = end($numbers);

    //Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng
    $minValue = min($numbers);
    $maxValue = max($numbers);
    $sum = array_sum($numbers);

    print_r("Phần tử đầu tiên: $firstElement<br>");
    print_r("Phần tử cuối cùng: $lastElement<br>");
    print_r("Số lớn nhất: $maxValue<br>");
    print_r("Số nhỏ nhất: $minValue<br>");
    print_r("Tổng các giá trị: $sum<br><br>");

    echo("Sắp xếp mảng theo chiều tăng các giá trị:");
    asort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre;";
    echo "<br>";

    echo ("Sắp xếp mảng theo chiều giảm các giá trị:");
    arsort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre;";
    echo "<br>";

    echo("Sắp xếp mảng theo chiều tăng các key:");
    ksort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre;";
    echo "<br>";

    echo ("Sắp xếp mảng theo chiều giảm các key:");
    krsort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre;";
    echo "<br>";