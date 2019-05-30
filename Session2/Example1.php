<?php
/*for ($i = 0; $i < 10; $i++) {
        echo $i;
        echo  "<br/>";
    } */

/*for ($i = 0; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo "So " . $i . " chia het cho 15 <br/>";
    } else if ($i % 3 == 0) {
        echo "So " . $i . " chia het cho 3 <br/>";
    } else if ($i % 5 == 0) {
        echo "So " . $i . " chia het cho 5 <br/>";
    }
}*/

//bt2 
$sum = 0;
$x = 2000;

for ($i = 0; $i < 10; $i++){
    if($x % 200 == 0){
        $sum += 1;
        if($sum % 2 == 0){
            $sum +=1;
        }
    }   
}
echo $sum;

//bt1
