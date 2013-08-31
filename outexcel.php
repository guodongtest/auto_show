<?php
include_once 'global.php';
if($_SESSION["name"]=='')
{
	echo "<script>location.href='login.php'</script>";
}

date_default_timezone_set('PRC');//设置默认时区为北京时间
$nowtime=date('Y-m-d H:i:s'); 

header("Cache-Control: public"); 
header ( "Content-type:application/vnd.ms-excel" );
header ( "Content-Disposition:attachment;filename=".$nowtime.".xls" );

$arr=PdoHelper::start()->query("select * from car_helper");
$smarty->assign("arr",$arr);

$smarty->display("outexcel.html");
?> 
