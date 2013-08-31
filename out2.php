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
	if(!isset($_GET["begintime2"]))
	{
		exit();
	}
	$begintime=$_GET["begintime2"];
	$endtime=$_GET["endtime2"];
	
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
	
	//KPI数组
	$j=0;
	$i=0;
	$list2=array();
	foreach ($helper as $v)
	{
		//查询时间段内每一个车助上传的问卷
		$array=PdoHelper::start()->query("select plan_time,date(created) AS `date` from questionnaire where helper_id=".$v["id"]." and date(created)<='{$endtime}' and date(created)>='{$begintime}' order by null");
		foreach ($date as $v1)
		{
			$sales=0;
			$hw=0;
			foreach ($array as $v2)
			{
				if($v2["date"]==$v1)
				{
					if($v2["plan_time"]<=5)
					{
						$hw++;
						$sales++;
					}
					elseif($v2["plan_time"]>=6&&$v2["plan_time"]<=8)
					{
						$sales++;
					}
				}
			}
			$list2[$i][$j]=$sales;
			$j++;
			$list2[$i][$j]=$hw;
			$j++;
			$list2[$i][$j]=$sales==0?'0%':round($hw/$sales*100).'%';
			$j++;
		}
		$j=0;
		$i++;
	}
	
	$listnum=count($list2);
	$listnum1=count($list2[0]);
	$sales=0;
	$hw=0;
	for($i=0;$i<$listnum;$i++)
	{
		for($j=0;$j<$listnum1;$j++)
		{
			if($j%3==0)
			{
				$sales+=$list2[$i][$j];
			}
			elseif(($j-1)%3==0)
			{
				$hw+=$list2[$i][$j];
			}
		}
		$list2[$i][$listnum1]=$sales;
		$list2[$i][$listnum1+1]=$hw;
		if($sales==0)
		{
			$list2[$i][$listnum1+2]='0%';
		}
		else
		{
			$list2[$i][$listnum1+2]=round($hw/$sales*100).'%';
		}
		$sales=0;
		$hw=0;
	}
	$date[count($date)]='Total';

	$smarty->assign("list2",$list2);

	$count=count($date);
	$cc=($count+1)*240+400;
	$width2=$cc.'px';


	$smarty->assign("helper",$helper);
	$smarty->assign("date",$date);
	$smarty->assign("width2",$width2);
	
	$smarty->display("out2.html");
}
catch(Exception $e)
{
	WriteLog(2,"车助KPI_V2: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
}

?>