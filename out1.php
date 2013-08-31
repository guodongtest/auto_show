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
	if(!isset($_GET["begintime1"]))
	{
		exit();
	}
	$begintime=$_GET["begintime1"];
	$endtime=$_GET["endtime1"];

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
	//车型数组
	$models_list=PdoHelper::start()->query('select `id` from `models` where `order`!=0 order by `order`');

	//by model数组
	$i=0;
	$j=0;
	$list1=array();
	
	foreach ($models_list as $v)
	{
//		$count=count($date);
//		$day=0;
		foreach ($date as $v1)
		{
//			if($day==0)
//			{
//				if($count==1)
//				{
//					$begintime10=$v1.' '.$begintime9;
//					$endtime10=$v1.' '.$endtime;
//				}
//				else 
//				{
//					$begintime10=$v1.' '.$begintime9;
//					$endtime10=$v1.' '.'23:59:59';
//				}
//			
//			}
//			else if($day+1==$count)
//			{
//				$begintime10=$v1.' '.'00:00:00';
//				$endtime10=$v1.' '.$endtime;
//			}
//			else 
//			{
//				$begintime10=$v1.' '.'00:00:00';
//				$endtime10=$v1.' '.'23:59:59';
//			}
//			$day++;
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
	
	$listnum=count($list1);
	$listnum1=count($list1[0]);
	$sales=0;
	$hw=0;
	$cold=0;
	for($i=0;$i<$listnum;$i++)
	{
		for($j=0;$j<$listnum1;$j++)
		{
			if($j%3==0)
			{
				$sales+=$list1[$i][$j];
			}
			elseif(($j-1)%3==0)
			{
				$hw+=$list1[$i][$j];
			}
			elseif(($j-2)%3==0)
			{
				$cold+=$list1[$i][$j];
			}
		}
		$list1[$i][$listnum1]=$sales;
		$list1[$i][$listnum1+1]=$hw;
		$list1[$i][$listnum1+2]=$cold;
		$sales=0;
		$hw=0;
		$cold=0;
	}
	
	for($i=0;$i<$listnum;$i++)
	{
		if($i==0||$i==1||$i==2||$i==3)
		{
			$fen1[]=$list1[$i];
		}
		elseif($i==4||$i==5||$i==6)
		{
			$fen2[]=$list1[$i];
		}
		elseif($i==7||$i==8||$i==9||$i==10||$i==11)
		{
			$fen3[]=$list1[$i];
		}
		elseif($i==12||$i==13||$i==14)
		{
			$fen4[]=$list1[$i];
		}
		elseif($i==15)
		{
			$fen5[]=$list1[$i];
		}
		elseif($i==16||$i==17||$i==18)
		{
			$fen6[]=$list1[$i];
		}
		elseif($i==19)
		{
			$fen7[]=$list1[$i];
		}
	}

	
	$fennum=count($fen1);
	$fennum1=count($fen1[0]);
	$sum=0;
	for($i=0;$i<$fennum1;$i++)
	{
		for($j=0;$j<$fennum;$j++)
		{
			$sum+=$fen1[$j][$i];
		}
		$fen1[$fennum][$i]=$sum;
		$sum=0;
	}
	$fennum=count($fen2);
	$fennum1=count($fen2[0]);
	$sum=0;
	for($i=0;$i<$fennum1;$i++)
	{
		for($j=0;$j<$fennum;$j++)
		{
			$sum+=$fen2[$j][$i];
		}
		$fen2[$fennum][$i]=$sum;
		$sum=0;
	}
	$fennum=count($fen3);
	$fennum1=count($fen3[0]);
	$sum=0;
	for($i=0;$i<$fennum1;$i++)
	{
		for($j=0;$j<$fennum;$j++)
		{
			$sum+=$fen3[$j][$i];
		}
		$fen3[$fennum][$i]=$sum;
		$sum=0;
	}
	$fennum=count($fen4);
	$fennum1=count($fen4[0]);
	$sum=0;
	for($i=0;$i<$fennum1;$i++)
	{
		for($j=0;$j<$fennum;$j++)
		{
			$sum+=$fen4[$j][$i];
		}
		$fen4[$fennum][$i]=$sum;
		$sum=0;
	}
	$fennum=count($fen5);
	$fennum1=count($fen5[0]);
	$sum=0;
	for($i=0;$i<$fennum1;$i++)
	{
		for($j=0;$j<$fennum;$j++)
		{
			$sum+=$fen5[$j][$i];
		}
		$fen5[$fennum][$i]=$sum;
		$sum=0;
	}
	$fennum=count($fen6);
	$fennum1=count($fen6[0]);
	$sum=0;
	for($i=0;$i<$fennum1;$i++)
	{
		for($j=0;$j<$fennum;$j++)
		{
			$sum+=$fen6[$j][$i];
		}
		$fen6[$fennum][$i]=$sum;
		$sum=0;
	}
	$fennum=count($fen7);
	$fennum1=count($fen7[0]);
	$sum=0;
	for($i=0;$i<$fennum1;$i++)
	{
		for($j=0;$j<$fennum;$j++)
		{
			$sum+=$fen7[$j][$i];
		}
		$fen7[$fennum][$i]=$sum;
		$sum=0;
	}
	$sum=0;
	for($i=0;$i<$fennum1;$i++)
	{
		$sum+=$fen1[count($fen1)-1][$i];
		$sum+=$fen2[count($fen2)-1][$i];
		$sum+=$fen3[count($fen3)-1][$i];
		$sum+=$fen4[count($fen4)-1][$i];
		$sum+=$fen5[count($fen5)-1][$i];
		$sum+=$fen6[count($fen6)-1][$i];
		$sum+=$fen7[count($fen7)-1][$i];
		$zong[]=$sum;
		$sum=0;
	}
	$date[count($date)]='Total';
	
	
	
	$smarty->assign("fen1",$fen1);
	$smarty->assign("fen2",$fen2);
	$smarty->assign("fen3",$fen3);
	$smarty->assign("fen4",$fen4);
	$smarty->assign("fen5",$fen5);
	$smarty->assign("fen6",$fen6);
	$smarty->assign("fen7",$fen7);
	$smarty->assign("zong",$zong);
	
	
	$count=count($date);
	$aa=($count+1)*150+450;
	$width=$aa.'px';
	
	$smarty->assign("date",$date);
	$smarty->assign("width",$width);

	$smarty->display("out1.html");
}
catch(Exception $e)
{
	WriteLog(2,"By_model报表: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
}

?>