<?php
include_once 'global.php';
if($_SESSION["name"]=='')
{
	echo "<script>location.href='login.php'</script>";
}

$smarty->display("index.html");
?>