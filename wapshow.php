<?php
	include_once 'global.php';
	try  
	{
		$qrcode=empty($_REQUEST["qrcode"])?0101:$_REQUEST["qrcode"];
		if(!empty($_REQUEST["phone"]))
		{
			$smarty->assign("phone",$_REQUEST["phone"]);
		}
		$smarty->assign("qrcode",$qrcode);
		$smarty->display("wapshow.html");
	}
	catch(Exception $e)
	{
		WriteLog(2,"wap提交手机号: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
	}

?>