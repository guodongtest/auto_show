<?php
include 'crypt.php';
include 'log.php';
$request=file_get_contents("php://input");
try 
{
	if($request["iscrypt"]==1)
	{
		encrypt($request["data"],"");
	}
	else 
	{
		decrypt($request["data"],"");
	}
}
catch(Exception $e)
{
	WriteLog(2,"加解密错误: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
}

?>