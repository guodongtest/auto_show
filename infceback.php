<?php
<?php
 include_once 'global.php';
 include_once 'sendinfo.php';
 include_once 'log.php';
 
//$success=array();//批量提交成功的ID
//$error=array();//批量提交失败的ID
//$issubmit=false;//是否提交成功
$msg="";        //提交失败的错误信息
$request=file_get_contents("php://input");
if(empty($request))
{
	ReturnV(-1,"提交的数据为空");
}
WriteLog(1,"收到请求: ".GetHttpInfo().date("Ymd H:i:s")."\n".$request."\n\n");
$questions=json_decode($request,true);
Submit($questions);

//提交用户问卷
 function Submit($question)
 {
 	$name=$question["name"];
	$sex=$question["sex"];
	$phone=trim($question["phone"]);
	$email=$question["email"];
	$province=$question["province"];
	$city=$question["city"];
	$is_havecar=$question["is_havecar"];
	$year=$question["year"];
	$brand=$question["brand"];
	$models=$question["models"];
	$driven_age=$question["driven_age"];
	$plan_time=$question["plan_time"];
	$plan_budget=$question["plan_budget"];
	$interest_car=$question["interest_car"];
	$dealer=$question["dealer"];
	$is_followup=$question["is_followup"];
	$is_receive=$question["is_receive"];
	$helper_id=$question["helper_id"];
	$duty=$question["duty"];
	try 
	{
	    $rlist=PdoHelper::start()->query("select id,code,duty from car_helper where code='$helper_id'");
    	if(!empty($rlist))
    	{
    	    $rnum=0;
    	    if($rlist[0]['duty']==$duty)
    	    {
    	        $rnum=1;
    	    }
    	    else 
    	    {
    	        $rnum=PdoHelper::start()->execute("update car_helper set duty='$duty' where code=$helper_id");
    	    }
    		$id=$rlist[0]["id"];
    		if($rnum>0)
    		{
    			$rlist=PdoHelper::start()->query("select id,email from questionnaire where phone='$phone'");
    			if(empty($rlist))
    			{
    			    $rnum=PdoHelper::start()->execute("insert questionnaire
    			    (name,sex,phone,email,province,city,is_havecar,year,brand,models,driven_age,plan_time,plan_budget,interest_car,dealer,is_followup,is_receive,helper_id,duty)
    			     values('$name','$sex','$phone','$email','$province','$city','$is_havecar','$year','$brand','$models','$driven_age','$plan_time','$plan_budget','$interest_car','$dealer','$is_followup','$is_receive','$id','$duty')");
    			     if(!empty($rnum))
    			     {
    			         //发送短信
    			         //send($phone);
    			         //$GLOBALS['issubmit']=true;
    			         ReturnV(1,"提交成功");
    			     }
    			}
    			else 
    			{
    			    $rnum=PdoHelper::start()->execute("insert repeatingdata
    			    (name,sex,phone,email,province,city,is_havecar,year,brand,models,driven_age,plan_time,plan_budget,interest_car,dealer,is_followup,is_receive,helper_id,duty)
    			     values('$name','$sex','$phone','$email','$province','$city','$is_havecar','$year','$brand','$models','$driven_age','$plan_time','$plan_budget','$interest_car','$dealer','$is_followup','$is_receive','$id','$duty')");
    			     if($rnum>0)
    			     {
    			         //$GLOBALS['issubmit']=true;
                         //$GLOBALS['issubmit']?ReturnV(1,"提交成功"):ReturnV(0,empty($GLOBALS['msg'])?"提交失败":$GLOBALS['msg']);
                         ReturnV(1,"提交成功");
    			     }
    			}
    		}
    	}
    	else 
    	{
    	   ReturnV(-1,"您的车助账号不存在,请核实");  
    	}
	}
	catch (Exception $e)
	{
	    //$GLOBALS['issubmit']=false;
	    $GLOBALS['msg']=$e->getMessage();
	    WriteLog(2,"错误: ".GetHttpInfo().date("Ymd H:i:s")."\n".$GLOBALS['msg']."\n\n");
	    ReturnV(0,"提交失败: ".$GLOBALS['msg']);
	}
 }
 
 //提交用户问卷
// function MutiSubmit($questions)
// {
// 	if(count($questions)==1)
// 	{
// 	    Submit($questions);
// 	    $GLOBALS['issubmit']?ReturnV(1,"提交成功"):ReturnV(-1,"提交失败");
// 	}
    //批量提交
// 	else 
// 	{
// 	    foreach ($questions as $q)
// 	    {
// 	        Submit($q);
// 	        if($GLOBALS['issubmit'])
// 	        {
// 	            array_push($GLOBALS['success'],array("phone"=>$q["phone"]));
// 	        }
// 	        else 
// 	        {
// 	            array_push($GLOBALS['error'],array("phone"=>$q["phone"]));
// 	        }
// 	    }
// 	    count($GLOBALS['error'])==0?ReturnV(1,"提交成功"):ReturnV(2,"部分提交成功");
// 	}
// }
 
 
 //返回提交数据结果
 //$rstatus 返回状态（1 成功，0 失败，2 部分提交成功,-1 其它错误信息）
 //$rmsg 返回提交信息
 function ReturnV($rstatus,$rmsg)
 {
 	$rarr=array(); 
 	if($rstatus==1||$rstatus==-1||$rstatus==0)
 	{
		$rarr["rstatus"]=$rstatus;
		$rarr["rmsg"]=urlencode($rmsg);
 	}
// 	if($rstatus==2)
// 	{
// 	    $rarr["rstatus"]=$rstatus;
//		$rarr["rmsg"]=$rmsg;
//		$rarr["success"]=$GLOBALS['success'];
//		$rarr["error"]=$GLOBALS['error'];
// 	}
    WriteLog(1,"返回: ".GetHttpInfo().date("Ymd H:i:s")."\n".json_encode($rarr)."\n\n");
 	echo json_encode($rarr);
 	exit();
 }
?>
?>