<?php
 include_once 'global.php';
 $_SESSION["name"]="";
  if(isset($_POST["Submit"]))
  {
  	 $username=$_POST["username"];
  	 $password=$_POST["password"];
  	 
     if($username=="admin" && $password=="123456")
	{
		$_SESSION["name"]=$username;
		echo "<script>location.href='index.php'</script>";
	}
	else 
	{
		echo "<script>alert('登录失败')</script>";
	}
  }
   $smarty->display("login.html");
?>