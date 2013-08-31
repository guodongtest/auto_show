<?php
include_once 'global.php';
include 'log.php';
if($_SESSION["name"]=='')
{
	echo "<script>location.href='login.php'</script>";
}

try 
{
	//添加
	if(isset($_POST["submit"]))
	{
		$text1=$_POST["text1"];
		$text2=$_POST["text2"];
		$duty='';
		if(!empty($text1) && !empty($text2))
		{   
		    $sql="insert into car_helper (code,name,duty) values('$text1','$text2','$duty')";
			$bo=PdoHelper::start()->execute($sql);
			  if($bo)
			  {
				echo "<script>alert('添加成功');location.href='car_manage.php'</script>";
			  }
			  else 
			  {
				echo "<script>alert('添加失败');location.href='car_manage.php'</script>";
			  }
		}
		else 
		{
			echo "<script>alert('不能为空');location.href='car_manage.php'</script>";
		}
	}
	//删除
	if(isset($_GET["id"]))
	{
	  $s=$_GET["id"];
	
	  $array=PdoHelper::start()->execute("delete from car_helper where id=$s");
	  
	  echo "<script>location.href='car_manage.php'</script>";
	}
	
	//编辑
	if(isset($_GET["id1"]))
	{
		$w=$_GET["id1"];
		$smarty->assign("id",$w);
	}
	//更新
	if(isset($_GET["id2"]))
	{   
		 $id=$_GET["id2"];
	     $code=$_GET["code"];
	     $name=$_GET["name"]; 
	    $i=PdoHelper::start()->execute("update car_helper set code=$code,name='$name' where id=$id"); 
	    echo "<script>location.href='car_manage.php';</script>";
	}
	$arr=PdoHelper::start()->query("select * from car_helper order by id");
	
	$smarty->assign("arr",$arr);
	
	$smarty->display('car_manage.html');
}
catch(Exception $e)
{
	WriteLog(2,"车助管理: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
}

?>