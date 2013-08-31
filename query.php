<?php
include_once 'global.php';
include_once 'log.php';
if($_SESSION["name"]=='')
{
	echo "<script>location.href='login.php'</script>"; 
}

try 
{
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
	
	$begintime9= date("H:i:s",strtotime($begintime));
	$endtime9=date("H:i:s",strtotime($endtime));
	
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
			$array=PdoHelper::start()->query("select count(*) as count,date(created) as date from questionnaire WHERE DATE(created)<='{$endtime}' and DATE(created)>='{$begintime}' and helper_id=".$v["id"]." GROUP BY date(created) ORDER BY created");
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
		$smarty->assign("list",$list);
		$smarty->assign("show",'');
		$smarty->assign("show1",'none');
		$smarty->assign("show2",'none');
	}
	elseif(isset($_GET["begintime2"]))
	{
		//车型数组
		$models_list=PdoHelper::start()->query("select `id` from `models` where `order`!=0 order by `order`");
		//by model数组
		$i=0;
		$j=0;
		$list1=array();
		foreach ($models_list as $v)
		{
//			$count=count($date);
//			$day=0;
			foreach ($date as $v1)
			{
//				if($day==0)
//				{
//					if($count==1)
//					{
//						$begintime10=$v1.' '.$begintime9;
//						$endtime10=$v1.' '.$endtime;
//					}
//					else 
//					{
//						$begintime10=$v1.' '.$begintime9;
//						$endtime10=$v1.' '.'23:59:59';
//					}
//				
//				}
//				else if($day+1==$count)
//				{
//					$begintime10=$v1.' '.'00:00:00';
//					$endtime10=$v1.' '.$endtime;
//				}
//				else 
//				{
//					$begintime10=$v1.' '.'00:00:00';
//					$endtime10=$v1.' '.'23:59:59';
//				}
//				$day++;
				$hw=0;
				$cold=0;
				//查询出每一天的有效问卷中存在当前车型的问卷的计划购买时间
				$array=PdoHelper::start()->query("select plan_time from questionnaire where interest_car=".$v["id"]." and DATE_FORMAT(created,'%Y-%m-%d')='$v1'");
				foreach ($array as $v2)
				{
					if($v2["plan_time"]<=5)
					{
						$hw++;
					}
					elseif($v2["plan_time"]>=6&&$v2["plan_time"]<=8)
					{
						$cold++;
					}
				}
				$list1[$i][$j]=$hw+$cold;
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
			$array=PdoHelper::start()->query("select plan_time,date(created) AS `date` from questionnaire where helper_id=".$v["id"]." and date(created)<='{$endtime}' and date(created)>='{$begintime}'");
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
	$cc=($count+1)*240+400;
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
}
catch(Exception $e)
{
	WriteLog(2,"统计报表: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
}

?>