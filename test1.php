<?php
//$sum=0;
//for($n=1;$n<=5000;$n++){
//	$sum=$sum+$n-1;
//}
//echo $sum."--".(5000*5000);
//return;

//$a=array(1,1,2,2);
//echo count($a)."<br>";
//$a=array_flip(array_flip($a));
//echo count($a);
//return;

/*---------------------------------------------------*/
//set_time_limit(300);
//$content = file_get_contents('D:\xampp\htdocs\auto_show\log\test1.txt');
//$content = explode("\n", $content);
//
////return;
//$str ="";
//$arr=array();
//$i=1;
//$t=time();
//while($i<=100){
//	$begin="123";
//	for($j=1;$j<=8;$j++){
//		$begin.=rand(0,9);
//	}
//	echo count($arr).",";
//	if(count($arr)==0){
//		$str.=$begin.",\n";
//		$i++;
//		array_push($arr,$begin);
//	}
//	else{
////		$isarr=true;	
////		for($m=0;$m<count($arr);$m++){
////			if($arr[$m]==$begin){
////				$isarr=false;
////				break;
////			}
////		}
////		if($isarr){
////			foreach ($content as $v) {
////				$tmp=str_replace(',','',$v);
////				if($tmp==$begin){
////					$isarr=false;
////					break;
////				}
////			}
////		}	
//		$isarr=in_array($begin,$arr);
////		$iscontent=in_array($begin.",",$content);
//		if(!$isarr){
//			$str.=$begin.",\n";
//			$i++;
//			array_push($arr,$begin);		
//		}
//	}
//}
////$myfile = 'D:\xampp\htdocs\auto_show\log\test.txt';
////$file_pointer = fopen($myfile,"a");
//////$t=time();
//fwrite($file_pointer,$str);
//fclose($file_pointer);
/*---------------------------------------------------*/

set_time_limit(300);
$t=time();
$content = file_get_contents('D:\xampp\htdocs\auto_show\log\test1.txt');
$content = explode("\n", $content);

$str="";
$strarr=array();
$addnum=0;
$sum=4000;
$num=4000;
$begin="123";
$end="";

while($addnum <$sum){
	for($i=1;$i<=$num;$i++){			
		for($j=1;$j<=8;$j++){
			$end.=rand(0,9);
		}
		array_push($strarr,$begin.$end);
		$end="";
	}
	$strarr=array_flip(array_flip($strarr));
	$strarr=array_diff($strarr,$content);
	$addnum=count($strarr);
	$num=$sum-$addnum;	
}

foreach($strarr as $s){
	$str.=$s.",\n";
}
unset($strarr);
$myfile = 'D:\xampp\htdocs\auto_show\log\test.txt';
$file_pointer = fopen($myfile,"a");
fwrite($file_pointer,$str);
fclose($file_pointer);
$t=time()-$t;
echo "<br>生成手机号成功,耗时：".$t."<br>".$str;
?>