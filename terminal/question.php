<?php
include_once '../global.php';
include_once('../sms.php');

$request=file_get_contents('php://input');

if(!isset($request))
{
	echo "0";
	exit();
}

$json=json_decode($request,true);

$name=$json["name"];
$sex=$json["sex"];
$phone=trim($json["phone"]);
$email=$json["email"];
$province=$json["province"];
$city=$json["city"];
$is_havecar=$json["is_havecar"];
$year=$json["year"];
$brand=$json["brand"];
$models=$json["models"];
$driven_age=$json["driven_age"];
$plan_time=$json["plan_time"];
$plan_budget=$json["plan_budget"];
$interest_car=$json["interest_car"];
$dealer=$json["dealer"];
$is_followup=$json["is_followup"];
$is_receive=$json["is_receive"];
$code=$json["code"];
$duty=$json["duty"];
//-----------------------------------------
//$name='dffds';
//$sex='1';
//$phone='544654';
//$email='dsfsd';
//$province='fdsfsd';
//$city='dfdfs';
//$is_havecar='2';
//$year='2011';
//$brand='dfds';
//$models='efe';
//$driven_age='5';
//$plan_time='8';
//$plan_budget='2';
//$interest_car='8';
//$dealer='北京鹏远兴业';
//$is_followup='1';
//$is_receive='1';
//$code=807;
//$duty='Jeep All New Grand Cherokee SRT8';


//if(strlen($phone)!=11)
//{
//	echo 1;
//	exit;
//}

$array=PdoHelper::start()->query("select id from car_helper where code='$code'");
if(empty($array))
{
	echo 0;
	exit();
}
$helperid=$array[0]["id"];
PdoHelper::start()->execute("update car_helper set duty='$duty' where id='$helperid'" );

$emaillist=PdoHelper::start()->query("select id,email from questionnaire where phone='".$phone."'");
if(empty($emaillist))
{
	$id=PdoHelper::start()->insert("insert into questionnaire (name,sex,phone,email,province,city,is_havecar,year,brand,models,driven_age,plan_time,plan_budget,interest_car,dealer,is_followup,is_receive,helper_id,duty) values ('$name','$sex','$phone','$email','$province','$city','$is_havecar','$year','$brand','$models','$driven_age','$plan_time','$plan_budget','$interest_car','$dealer','$is_followup','$is_receive','$helperid','$duty')");
	
	//发送短信
	if($id&&preg_match('/^[1][358][0-9]{9}$/',$phone))
	{
		$target = "http://dx.lmobile.cn:6003/submitdata/Service.asmx/g_Submit";
		$content="尊敬的阁下：\n感谢您莅临2012北京国际车展克莱斯勒展台赏车，品鉴Chrysler与Jeep旗下各车型风采！\n[克莱斯勒中国]";
		$post_data = "sname=dlbiaoyang&spwd=12345678&scorpid=&sprdid=1012812&sdst=$phone&smsg=".rawurlencode($content);
		$gets = Post($post_data, $target);
	}
}
else
{
	$id=PdoHelper::start()->insert("insert into repeatingdata (name,sex,phone,email,province,city,is_havecar,year,brand,models,driven_age,plan_time,plan_budget,interest_car,dealer,is_followup,is_receive,helper_id,duty) values ('$name','$sex','$phone','$email','$province','$city','$is_havecar','$year','$brand','$models','$driven_age','$plan_time','$plan_budget','$interest_car','$dealer','$is_followup','$is_receive','$helperid','$duty')");
	if($emaillist[0]["email"]==''&&$email!='')
	{
		PdoHelper::start()->execute("update questionnaire set email='$email' where id='".$emaillist[0]["id"]."'");
	}
}



if($id)
{
	echo 1;
}
else 
{
	echo 0;
}
	
?>