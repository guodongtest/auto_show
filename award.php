<?php
	include 'SubPages.php';
	include 'global.php';
	include 'log.php';
	//每页显示的条数  
	$page_size=10;
	//每次显示的页数  
	$sub_pages=10;
	try 
	{
		$type=@$_GET["type"];
		$begindate=@$_GET["begindate"];
		$enddate=@$_GET["enddate"];
		$link="award.php?type=2";
		$phone=@$_GET["phone"];
		if($type==1)
		{
			if(!empty($begindate)&&!empty($enddate))
			{	
				if($begindate>$enddate)
				{
					$smarty->assign("begindate",$begindate);
					$smarty->assign("enddate",$enddate);
					echo "<script>alert('开始时间不能大于结束时间');</script>";
				}
			}
			$pageCurrent=1;
		}
		else
		{
			$pageCurrent=$_GET["p"];
			if($_GET["isaward"]==0)
			{
				$id=$_GET["id"];
				//更新客户领奖状态
				PdoHelper::start()->execute("update questionnaire set isaward=1 where id=".$id);
				
			}		
		}
		$sql=" from questionnaire where 1=1";
		if(!empty($begindate)&&!empty($enddate))
		{
			$sql.=" and savetime>='".$begindate."' and savetime<='".$enddate."'";
			$link.="&begindate=$begindate&enddate=$enddate";
		}
	
		if(!empty($phone))
		{
			$sql.=" and phone='".$phone."'";
			$link.="&phone=".$phone;
		}
	
		$num=PdoHelper::start()->query("select count(*) count".$sql);
		$sql.=" order by created limit ".($pageCurrent-1)*$page_size.",".$page_size;
		$awardlist=PdoHelper::start()->query("select id,name,phone,isaward".$sql);
		$subPages=new SubPages($page_size,$num[0]["count"],$pageCurrent,$sub_pages,$link."&isaward=1&p=");
		$link.="&p=";
		$smarty->assign("awardlist",$awardlist);
		$smarty->assign("link",$link.$pageCurrent);
		$smarty->assign("page",$subPages->subPageCss2());
		$smarty->display("award.html");
	}
	catch(Exception $e)
	{
		WriteLog(2,"发送奖品: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
	}
	
?>