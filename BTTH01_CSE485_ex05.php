<?php
    $a = [
        'a' => [
            'b' => 0,
            'c' => 1
        ],
        'b' => [
            'e' => 2,
            'o' => [
                'b' => 3
            ]
        ]
    ];
       
    //lấy giá trị = 3 mà có key là b
    $valueb = $a['b']['o']['b'];
    echo "Giá trị của key 'b' là: $valueb<br>";

    //lấy giá trị = 1 mà có key là c
    $valuec = $a['a']['c'];
    echo "Giá trị của key 'c' là: $valuec<br>";

    //lấy thông tin của phần tử có key là a
    $infoA = $a['a'];
    print_r($infoA);
?>