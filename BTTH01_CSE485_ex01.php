<?php
    $arrs=[2, 5, 6, 9, 2, 5, 6, 12, 5];

    function tinhTong($arr){
        return array_sum($arr);
    }

    function tinhTich($arr){
        $product = 1;
        foreach ($arr as $nums){
            $product *= $nums;
        }
        return $product;
    }

    function tinhHieu($arr){
        $difference = $arr[0];
        for ($i = 1; $i < count($arr); $i++){
            $difference -= $arr[$i];
        }
        return $difference;
    }

    function tinhThuong($arr){
        $quotient = $arr[0];
        for ($i = 1; $i < count($arr); $i++){
            if($arr[$i] == 0)
                return "Không thể chia cho 0";
                $quotient /= $arr[$i];
        }
        return $quotient;
    }

    $tong = tinhTong($arrs);
    $tich = tinhTich($arrs);
    $hieu = tinhHieu($arrs);
    $thuong = tinhThuong($arrs);

    echo "Tổng các phần tử = ".implode("+", $arrs)." = ".$tong.'<br>';
    echo "Tích các phần tử = ".implode("+", $arrs)." = ".$tich.'<br>';
    echo "Hiệu các phần tử = ".implode("+", $arrs)." = ".$hieu.'<br>';
    echo "Thương các phần tử = ".implode("+", $arrs)." = ".$thuong.'<br>';
?>