<?php
include_once 'global.php';
//include_once 'sendinfo.php';
include_once 'log.php';


$success=array();//批量提交成功的数量
$error=array();//批量提交失败的数量
$msg="";        //提交失败的错误信息
$id=array();
$request=file_get_contents("php://input");
WriteLog(1,"收到ipad上传请求: ".GetHttpInfo().date("Ymd H:i:s")."\n".$request."\n\n");
$result=Submit($request);
WriteLog(1,"ipad上传返回: ".GetHttpInfo().date("Ymd H:i:s")."\n".$result."\n\n");
echo $result;
exit();

//添加用户问卷信息
function AddCar($question)
{
	try
	{
		$name=$question["name"];
		$sex=$question["sex"];
		$phone=trim($question["phone"]);
		$email=$question["email"]="null"?"":$question["email"];
		$province=$question["province"];
		$city=$question["city"];
//		$is_havecar=empty($question["is_havecar"])?0:$question["is_havecar"];
//		$year=$question["year"];
//		$brand=$question["brand"];
//		$models=$question["models"];
//		$driven_age=empty($question["driven_age"])?0:$question["driven_age"];
		$plan_time=empty($question["plan_time"])?0:$question["plan_time"];
//		$plan_budget=empty($question["plan_budget"])?0:$question["plan_budget"];
		$interest_car=$question["interest_car"];
		$dealer=$question["ipadDealer"];
		$is_followup=2;
		$is_receive=2;
		//$helper_id=$question["helper_id"];
		$duty="";
//		$isqrcode=$question["isqrcode"];
//		$qrcode=$question["isqrcode"]==0?"":$question["isqrcode"];
//		$sell="";
//		$infotype=1;
//		$savetime=$question["savetime"];

		$isqrcode=0;
		$qrcode="克莱斯勒";
		$sell=@$question["ipadSell"];
		$infotype=2;
		//$savetime=$question["savetime"];

		$rlist=PdoHelper::start()->query("select * from models where models='$interest_car'");
		$interest_car=empty($rlist)?-1:$rlist[0]["id"];
		$rlist=PdoHelper::start()->query("select * from questionnaire where phone='$phone'");
		//判断上传手机号有没有记录
		if(empty($rlist))
		{
			$rid=PdoHelper::start()->insert("insert questionnaire
			(name,sex,phone,email,province,city,plan_time,interest_car,is_followup,is_receive,duty,savetime,isqrcode,qrcode,sell,infotype,created,dealer)
			values('$name','$sex','$phone','$email','$province','$city','$plan_time',$interest_car,$is_followup,$is_receive,'$duty',CURRENT_TIMESTAMP,$isqrcode,'$qrcode','$sell','$infotype',CURRENT_TIMESTAMP,'$dealer')
			");
			//发送短信
			//send($phone);
			//$GLOBALS['issubmit']=true;
			array_push($GLOBALS['id'],array("id"=>$rid,"phone"=>$phone));
			return true;
		}
		else
		{
			//判断手机号码已有记录的设备类型(itouch 覆盖并保留车助编号和保存时间,ipad 放入备份表)
			if($rlist[0]["infotype"]==1)
			{
				
//				PdoHelper::start()->execute("insert repeatingdata
//				 (name,sex,phone,email,province,city,is_havecar,year,brand,models,driven_age,plan_time,plan_budget,interest_car,dealer,is_followup,is_receive,helper_id,duty,savetime,isqrcode,qrcode,sell,infotype,created)
//				 values('".$rlist[0]["name"]."','".$rlist[0]["sex"]."','".$rlist[0]["phone"]."','".$rlist[0]["email"]."','".$rlist[0]["province"]."','".$rlist[0]["city"]."','".$rlist[0]["is_havecar"]."','".$rlist[0]["year"]."','".$rlist[0]["brand"]."','".$rlist[0]["models"]."',".$rlist[0]["driven_age"].",".$rlist[0]["plan_time"].",".$rlist[0]["plan_budget"].",".$rlist[0]["interest_car"].",'".$rlist[0]["dealer"]."',".$rlist[0]["is_followup"].",".$rlist[0]["is_receive"].",".$rlist[0]["helper_id"].",'".$rlist[0]["duty"]."','".$rlist[0]["savetime"]."',".$rlist[0]["isqrcode"].",'".$rlist[0]["qrcode"]."','".$rlist[0]["sell"]."',".$rlist[0]["infotype"].",'".$rlist[0]["created"]."')");
//
				PdoHelper::start()->execute("update questionnaire set
				name='$name',
				sex=$sex,
				phone='$phone',
				email='$email',
				province='$province',
				city='$city',
				plan_time=$plan_time,
				interest_car=$interest_car,
				is_followup=$is_followup,
				is_receive=$is_receive,
				isqrcode=$isqrcode,
				qrcode='$qrcode',
				sell='$sell',
				infotype=$infotype,
				dealer='$dealer',
				created=CURRENT_TIMESTAMP
				where id=".$rlist[0]["id"]);
				array_push($GLOBALS['id'],array("id"=>$rlist[0]["id"],"phone"=>$rlist[0]["phone"]));
				return true;
			}
			else
			{
				PdoHelper::start()->execute("insert repeatingdata
				(name,sex,phone,email,province,city,plan_time,interest_car,is_followup,is_receive,duty,savetime,isqrcode,qrcode,sell,infotype,created,dealer)
				values('$name','$sex','$phone','$email','$province','$city','$plan_time',$interest_car,$is_followup,$is_receive,'$duty',CURRENT_TIMESTAMP,$isqrcode,'$qrcode','$sell','$infotype',CURRENT_TIMESTAMP,'$dealer')");
				return true;
			}
		}
	}
	catch (Exception $e)
	{
		$GLOBALS['msg']=$e->getMessage();
		WriteLog(2,"ipad上传接口错误: ".GetHttpInfo().date("Ymd H:i:s")."\n".$GLOBALS['msg']."\n\n");
		return false;
	}
}

//提交用户问卷
function Submit($request)
{
	if(empty($request))
	{
		return ReturnV(0,"提交的数据为空");
	}
	$questions=json_decode($request,true);
	if(count($questions)==1)
	{
		return AddCar($questions[0])?ReturnV(1,"提交成功"):ReturnV(0,$GLOBALS['msg']);
	}
	else  //批量提交
	{
		$GLOBALS['success']=0;
		$GLOBALS['error']=0;
		foreach ($questions as $q)
		{
			if(!empty($q))
			{
				if(AddCar($q))
				{
					$GLOBALS['success']+=1;
				}
				else
				{
					$GLOBALS['error']+=1;
				}
			}
		}
		return $GLOBALS['error']==0?ReturnV(3,"提交成功"):ReturnV(2,"批量提交失败");
	}
}


//返回提交数据结果
//$rstatus 返回状态（1 成功，0 失败，2 批量提交失败，3 批量提交成功）
//$rmsg 返回提交信息
function ReturnV($rstatus,$rmsg)
{
	$rarr=array();
	if($rstatus==1||$rstatus==0)
	{
		$rarr["rstatus"]=$rstatus;
		$rarr["rmsg"]=urlencode($rmsg);
		$rarr["id"]=$GLOBALS['id'];
	}
	if($rstatus==2||$rstatus==3)
	{
		$rarr["rstatus"]=$rstatus;
		$rarr["rmsg"]=urlencode($rmsg);
		$rarr["success"]=$GLOBALS['success'];
		$rarr["error"]=$GLOBALS['error'];
		$rarr["id"]=$GLOBALS['id'];
	}
	return urldecode(json_encode($rarr));
}
?>