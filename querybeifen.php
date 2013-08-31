<?php
include_once 'global.php';
if($_SESSION["name"]=='')
{
	echo "<script>location.href='login.php'</script>";
}

if(!isset($_GET["begintime"])&&!isset($_GET["begintime2"])&&!isset($_GET["begintime3"]))
{
	$smarty->assign("show",'none');
	$smarty->assign("show1",'none');
	$smarty->assign("show2",'none');
	$smarty->display("query.html");
	exit();
}
if(isset($_GET["begintime"]))
{
	$begintime=$_GET["begintime"];
	$endtime=$_GET["endtime"];
}
elseif (isset($_GET["begintime2"]))
{
	$begintime=$_GET["begintime2"];
	$endtime=$_GET["endtime2"];
}
elseif (isset($_GET["begintime3"]))
{
	$begintime=$_GET["begintime3"];
	$endtime=$_GET["endtime3"];
}
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

if(isset($_GET["begintime"]))
{
	//上传数据量数组
	$i=0;
	$j=0;
	$list=array();
	foreach ($helper as $v)
	{
		$array=PdoHelper::start()->query("select count(id) as count,date(created) as date from questionnaire WHERE created<='{$endtime}' and created>='{$begintime}' and helper_id=".$v["id"]." GROUP BY date(created) ORDER BY created");
		foreach ($date as $v1)
		{
			$list[$i][$j]=0;
			foreach($array as $v2)
			{
				if($v2["date"]==$v1)
				{
					$list[$i][$j]=$v2["count"];
					break;
				}
			}
			$j++;
		}
		$j=0;
		$i++;
	}
	$smarty->assign("list",$list);
	$smarty->assign("show",'');
	$smarty->assign("show1",'none');
	$smarty->assign("show2",'none');
}
elseif(isset($_GET["begintime2"]))
{
	//车型数组
	$models_list=PdoHelper::start()->query('select id from models where id>=5 order by id');
	//by model数组
	$i=0;
	$j=0;
	$list1=array();
	
	foreach ($models_list as $v)
	{
		foreach ($date as $v1)
		{
			$sales=0;
			$hw=0;
			$cold=0;
			//查询出每一天的有效问卷id和计划购买时间
			$array=PdoHelper::start()->query("select id,plan_time from questionnaire where is_havecar=2 and date(created)='$v1'");
			foreach ($array as $v2)
			{
				//查询出每一份问卷的感兴趣车型中是否有当前车型
				$arr=PdoHelper::start()->query("select id from guanxi where qid=".$v2["id"]." and models_id=".$v["id"]);
				if(empty($arr))
				{
					$cold++;
					continue;
				}
				if($v2["plan_time"]<=5)
				{
					$sales++;
					$hw++;
				}
				elseif($v2["plan_time"]==6)
				{
					$sales++;
				}
				elseif($v2["plan_time"]==8)
				{
					$cold++;
				}
			}
			$list1[$i][$j]=$sales;
			$j++;
			$list1[$i][$j]=$hw;
			$j++;
			$list1[$i][$j]=$cold;
			$j++;
		}
		$j=0;
		$i++;
	}
	$smarty->assign("list1",$list1);
	$smarty->assign("show",'none');
	$smarty->assign("show1",'');
	$smarty->assign("show2",'none');
}
elseif(isset($_GET["begintime3"]))
{
	//KPI数组
	$j=0;
	$i=0;
	$list2=array();
	foreach ($helper as $v)
	{
		//查询时间段内每一个车助上传的问卷
		$array=PdoHelper::start()->query("select plan_time,date(created) AS `date` from questionnaire where is_havecar=2 and helper_id=".$v["id"]." and created<='{$endtime}' and created>='{$begintime}' order by null");
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
						$sales++;
						$hw++;
					}
					elseif($v2["plan_time"]==6)
					{
						$sales++;
					}
				}
			}
			$list2[$i][$j]=$sales;
			$j++;
			$list2[$i][$j]=$hw;
			$j++;
			if($sales==0)
			{
				$list2[$i][$j]='0%';
			}
			else 
			{
				$list2[$i][$j]=round($hw/$sales*100).'%';
			}
			$j++;
		}
		$j=0;
		$i++;
	}
	$smarty->assign("list2",$list2);
	$smarty->assign("show",'none');
	$smarty->assign("show1",'none');
	$smarty->assign("show2",'');
}


//计算table的宽度
$count=count($date);
$aa=($count+1)*150+450;
$width=$aa.'px';
//by model table宽度
$bb=($count+2)*100;
$width1=$bb.'px';
//车助KPI
$cc=($count+1)*240+200;
$width2=$cc.'px';



//echo '<pre>'.print_r($list,1).'</pre>';
$smarty->assign("helper",$helper);
$smarty->assign("date",$date);
$smarty->assign("width",$width);
$smarty->assign("width1",$width1);
$smarty->assign("width2",$width2);
$smarty->assign("begintime",$begintime);
$smarty->assign("endtime",$endtime);


$smarty->display("query.html");
?>