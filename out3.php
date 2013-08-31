<?php
include_once 'global.php';
include_once 'log.php';
if($_SESSION["name"]=='')
{
	echo "<script>location.href='login.php'</script>";
}
date_default_timezone_set('PRC');//设置默认时区为北京时间
$nowtime=date('Y-m-d H:i:s'); 

header("Cache-Control: public"); 
header ( "Content-type:application/vnd.ms-excel" );
header ( "Content-Disposition:attachment;filename=".$nowtime.".xls" );

try 
{
	if(!isset($_GET["begintime4"]))
	{
		exit();
	}
	
	$begintime=$_GET["begintime4"];
	$endtime=$_GET["endtime4"];
	
	$begindate=date("Y-m-d",strtotime($begintime));
	$enddate=date("Y-m-d",strtotime($endtime));
	
	$table=$_GET['is_repeat']==1?'`repeatingdata`':'`questionnaire`';
	
	$list3=PdoHelper::start()->query("
		select * from (SELECT a.`name`,
		CASE `sex` WHEN '1' THEN '男' WHEN '2' THEN '女' ELSE '' END AS `sex`,
		`phone`,
		`email`,
		CASE `interest_car` 
		WHEN '8' THEN '2014大切诺基3.0L' 
		WHEN '9' THEN '2014大切诺基3.6L' 
		WHEN '10' THEN '2014大切诺基5.7L' 
		WHEN '11' THEN '2014大切诺基SRT8' 
		WHEN '12' THEN '2014指南者2.0L' 
		WHEN '13' THEN '2014指南者2.4L'
		WHEN '14' THEN '2014指南者2.4L蛇行珍藏版' 
		WHEN '15' THEN '牧马人Sahara两门款' 
		WHEN '16' THEN '牧马人Sahara四门款' 
		WHEN '17' THEN '牧马人Rubicon两门款' 
		WHEN '18' THEN '牧马人Rubicon四门款' 
		WHEN '19' THEN '牧马人Rubicon十周年纪念款' 
		WHEN '20' THEN '2014自由客2.0L' 
		WHEN '21' THEN '2014自由客2.4L' 
		WHEN '22' THEN '2014自由客2.4L蛇行珍藏版' 
		WHEN '23' THEN '2014自由光' 
		WHEN '24' THEN '300C' 
		WHEN '25' THEN '300S' 
		WHEN '26' THEN '大捷龙' 
		WHEN '27' THEN '酷威'  
		ELSE '' END AS `interest_car`,
		CASE `plan_time` WHEN '1' THEN '一周内' WHEN '2' THEN '二周内' WHEN '3' THEN '一个月内' WHEN '4' THEN '三个月内' WHEN '5' THEN '半年内' WHEN '6' THEN '一年内' WHEN '7' THEN '一年后' WHEN '8' THEN '暂无购车计划' ELSE '' END AS `plan_time`,	
		`province`,
		`city`,
		`dealer`,
		CASE `is_followup` WHEN '1' THEN '是' WHEN '2' THEN '否' ELSE '' END AS `is_followup`,
		CASE `is_receive` WHEN '1' THEN '是' WHEN '2' THEN '否' ELSE '' END AS `is_receive`,
		`savetime`,
		`created`,
		b.`code`,
		`sell`,
		CASE `infotype` WHEN '1' THEN 'itouch' WHEN '2' THEN 'ipad' END AS `infotype`,
		CASE `isqrcode` WHEN '1' THEN '是' else '否' END AS `isqrcode`, 
		CASE `province` WHEN '四川省' THEN 3 WHEN '四川' THEN 2 ELSE 0 END AS `psoft`,
		CASE `city` WHEN '成都' THEN 1 ELSE 0 END AS `csoft`,
		`qrcode` FROM $table a left join car_helper b on a.helper_id=b.id 
		where date(a.created)<='{$endtime}' and date(a.created)>='{$begintime}') c ORDER BY c.psoft DESC,c.csoft DESC,c.created
	");
	
	$smarty->assign("list3",$list3);
	$smarty->display("out3.html");
}
catch(Exception $e)
{
	WriteLog(2,"上传数据明细: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
}

?>