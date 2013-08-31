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
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename=".$nowtime.".xls");
try 
{
	if(!isset($_GET["begintime"]))
	{
		exit();
	}
	$begintime=$_GET["begintime"];
	$endtime=$_GET["endtime"];
	
	$begindate=date("Y-m-d",strtotime($begintime));
	$enddate=date("Y-m-d",strtotime($endtime));
	
	//日期数组
	$date=array();
	$begindate1=$begindate;
	while (true)
	{
		$date[]=$begindate1;
		if(strtotime($begindate1)==strtotime($enddate))
		{
			break;
		}
		$begindate1=date("Y-m-d",strtotime("+1 day",strtotime($begindate1)));
	}
	//车助数组
	$helper=PdoHelper::start()->query('select * from car_helper order by code');
	$i=0;
	$j=0;
	$list=array();
	foreach ($helper as $v)
	{
		$array=PdoHelper::start()->query("select count(id) as count,date(created) as date from questionnaire WHERE date(created)<='{$endtime}' and date(created)>='{$begintime}' and helper_id=".$v["id"]." GROUP BY date(created) ORDER BY created");
		foreach ($date as $v1)
		{
			$list[$i][$j]=0;
			foreach($array as $k2=>$v2)
			{
				if($v2["date"]==$v1)
				{
					$list[$i][$j]=$v2["count"];
					unset($array[$k2]);
					break;
				}
			}
			$j++;
		}
		$j=0;
		$i++;
	}
	$listnum=count($list);
	$listnum1=count($list[0]);
	$sum=0;
	for($i=0;$i<$listnum;$i++)
	{
		for($j=0;$j<$listnum1;$j++)
		{
			$sum+=$list[$i][$j];
		}
		$list[$i][$listnum1]=$sum;
		$sum=0;
	}
	$listnum=count($list);
	$listnum1=count($list[0]);
	$sum=0;
	for($i=0;$i<$listnum1;$i++)
	{
		for($j=0;$j<$listnum;$j++)
		{
			$sum+=$list[$j][$i];
		}
		$list[$listnum][$i]=$sum;
		$sum=0;
	}
	
	$date[count($date)]='Total';
	$helper[count($helper)]["code"]='Total';
	
	$smarty->assign("list",$list);
	
	$count=count($date);
	$aa=($count+2)*100;
	$width1=$aa.'px';
	
	$smarty->assign("helper",$helper);
	$smarty->assign("date",$date);
	$smarty->assign("width1",$width1);
	
	$smarty->display("out.html");
}
catch(Exception $e)
{
	WriteLog(2,"车助KPI_V1: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
}


?>