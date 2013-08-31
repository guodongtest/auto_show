<?php 
include_once 'global.php';
if($_SESSION["name"]=='')
{
	echo "<script>location.href='login.php'</script>";
}
if(isset($_GET["id"]))
{
 $i=$_GET["id"];
 
 $array=PdoHelper::start()->query("select * from car_helper where id=$i");
 $smarty->assign("array",$array);
 
 $smarty->display("car_manage.html");
}
?>