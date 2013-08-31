<?php
include_once 'global.php';
//include_once 'sendinfo.php';
include_once 'log.php';

//echo ReturnV(0,"此接口已经禁用");
//return;

$success=array();//批量提交成功的数量
$error=array();//批量提交失败的数量
$msg="";        //提交失败的错误信息
$request=file_get_contents("php://input");
WriteLog(1,"收到ipad修改请求: ".GetHttpInfo().date("Ymd H:i:s")."\n".$request."\n\n");
$result=Submit($request);
WriteLog(1,"ipad修改返回: ".GetHttpInfo().date("Ymd H:i:s")."\n".$result."\n\n");
echo $result;
exit();

//添加用户问卷信息
function AddCar($question)
{
	try
	{
		$id=$question["id"];
		$name=$question["name"];
		$sex=$question["sex"];
//		$phone=trim($question["phone"]);
		$email=$question["email"];
		$province=$question["province"];
		$city=$question["city"];
//		$is_followup=$question["is_followup"];
//		$is_receive=$question["is_receive"];
		$plan_time=empty($question["plan_time"])?0:$question["plan_time"];
		$interest_car=$question["interest_car"];
		$dealer=$question["ipadDealer"];
		$sell=$question["ipadSell"];

		$rlist=PdoHelper::start()->query("select * from models where models='$interest_car'");
		$interest_car=empty($rlist)?-1:$rlist[0]["id"];
		$rlist=PdoHelper::start()->query("select * from questionnaire where id=$id");
		//判断要修改的记录是否存在
		if(empty($rlist))
		{
			WriteLog(2,"ipad修改接口错误: ".GetHttpInfo().date("Ymd H:i:s")."\n"."记录编号：".$id."   您要修改的此条记录不存在"."\n\n");
			return false;
		}
		else
		{
			//判断手机号码已有记录的设备类型(itouch 覆盖并保留车助编号和上传时间,ipad 放入备份表)
//			if($rlist[0]["phone"]==$phone)
//			{
				PdoHelper::start()->execute("update questionnaire set
				name='$name',
				sex=$sex,
				email='$email',
				province='$province',
				city='$city',
				plan_time=$plan_time,
				interest_car=$interest_car,
				dealer='$dealer',
				sell='$sell',
				infotype=2,
				created=CURRENT_TIMESTAMP
				where id=".$rlist[0]["id"]);
				return true;
//			}
//			else
//			{
//				$rphone=PdoHelper::start()->query("select * from questionnaire where phone='$phone'");
//				if(empty($rphone))
//				{
//					PdoHelper::start()->execute("update questionnaire set
//					name='$name',
//					sex=$sex,
//					phone='$phone',
//					email='$email',
//					province='$province',
//					city='$city',
//					plan_time=$plan_time,
//					interest_car=$interest_car,
//					dealer='$dealer',
//					infotype=2
//					where id=".$rlist[0]["id"]);
//					return true;
//				}
//				else 
//				{
//					WriteLog(2,"ipad修改接口错误: ".GetHttpInfo().date("Ymd H:i:s")."\n".$phone."： 不能修改手机号"."\n\n");
//					$GLOBALS['msg']="不能修改手机号";
//					return false;
//				}
//			}
		}
	}
	catch (Exception $e)
	{
		$GLOBALS['msg']=$e->getMessage();
		WriteLog(2,"ipad修改接口错误: ".GetHttpInfo().date("Ymd H:i:s")."\n".$GLOBALS['msg']."\n\n");
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
		return AddCar($questions[0])?ReturnV(1,"修改成功"):ReturnV(0,empty($GLOBALS['msg'])?"修改失败":$GLOBALS['msg']);
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
		return $GLOBALS['error']==0?ReturnV(3,"批量修改成功"):ReturnV(2,"批量提交失败");
	}
}


//返回提交数据结果
//$rstatus 返回状态（1 成功，0 失败，2 批量修改失败，3 批量修改成功）
//$rmsg 返回提交信息
function ReturnV($rstatus,$rmsg)
{
	$rarr=array();
	if($rstatus==1||$rstatus==0)
	{
		$rarr["rstatus"]=$rstatus;
		$rarr["rmsg"]=urlencode($rmsg);
	}
	if($rstatus==2||$rstatus==3)
	{
		$rarr["rstatus"]=$rstatus;
		$rarr["rmsg"]=urlencode($rmsg);
		$rarr["success"]=$GLOBALS['success'];
		$rarr["error"]=$GLOBALS['error'];
	}
	return urldecode(json_encode($rarr));
}
?>