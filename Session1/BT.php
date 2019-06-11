<?php
$x = 5;
if ($x >= 1 && $x <= 12) {
    if ($x != 2) {
        if ($x == 4 || $x == 6 || $x == 9 || $x == 11) {
            echo "Day la thang trong nam <br/> Thang nay co 30 ngay";
        } else {
            echo "Day la thang trong nam <br/> Thang nay co 31 ngay";
        }
    } else {
        $y = 2010;
        if ($y % 100 == 0) {
            if ($y % 400 == 0) {
                echo "Day la nam nhuan <br/> Thang 2 co 29 ngay";
            } else {
                echo "Day la nam khong nhuan <br/> Thang 2 co 28 ngay";
            }
        } else if ($y % 4 == 0) {
            echo "Day la nam nhuan <br/> Thang 2 co 29 ngay";
        } else {
            echo "Day la nam khong nhuan <br/> Thang 2 co 28 ngay";
        }
    }
} else {
    echo "Day khong phai la thang trong nam";
}
