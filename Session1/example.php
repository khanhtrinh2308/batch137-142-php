<?php
	$userName = "khanh"; /*bien trong php khai bao ban dau $*/
	$myPhone = "0905029458";
	$a = 5 ;
	$b = 7 ;
	echo $a+$b;
	echo "<br/>"; /*html trong php phai dung echo de hien thi*/
	echo $userName; 

	//Ham trong php
	function myFunctionName($a=4, $b=5){
		return $a + $b;
	}
	echo "<br/>";
	echo myFunctionName(9, 6); // goi ham trong php

	echo "<br/>";
	$x = myFunctionName(9, 5);
	echo "$x";

	echo "<br/>";
	$y = myFunctionName();//k truyen tham so se lay tham so mac dinh
	echo "$y";

	function myTest(){
		echo "demo";
	}
	echo"<br/>";
	echo myTest();

	echo "<br/>";
	function CheckNumber($a){
		if ($a%2==0) {
			echo "chan";# code...
		}else{
			echo "le";
		}
	}
	echo CheckNumber(4);

	echo "<br/>";
	$x = 12;
	switch ($x) {
		case '1':
		case'3':
		case '5':
		case '7':
		case '8':
		case'10':
		case '12':
			echo "Day la thang trong nam <br/> thang nay co 31 ngay";
			break;	
		case '2':
			echo "Day la thang trong nam <br/> thang nay co 28 hoac 29 ngay";
			break;
		case '4':
		case '6':
		case '9':
		case '11':
			echo "Day la thang trong nam <br/> thang nay co 30 ngay";
			break;			
		default :
			echo "Day khong phai thang trong nam";
			break;
	}

	echo "<br/>";
	$y=2010;
	if($y%4 &&!$y%100){
		echo "day la nam nhuan <br/> thang 2 co 29 ngay";
	}else{
		echo "day k phai nam nhuan <br/> thang 2 co 28 ngay";
	}
?>