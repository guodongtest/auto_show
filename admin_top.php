<?php
include_once 'global.php';
if(isset($_SESSION["name"]))
{
	$smarty->assign("session",$_SESSION["name"]);
}

$smarty->display('admin_top.html');
?>