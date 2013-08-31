<?php
include_once 'global.php';
include_once 'log.php';

$request=file_get_contents("php://input");
WriteLog(1,"收到ipad查询请求: ".GetHttpInfo().date("Ymd H:i:s")."\n".$request."\n\n");
$result=QueryCar($request);
WriteLog(1,"ipad查询返回: ".GetHttpInfo().date("Ymd H:i:s")."\n".$result."\n\n");
echo $result;
exit();

//添加用户问卷信息
function QueryCar($request)
{
	try
	{
		if(empty($request))
		{
			return ReturnV(0,"提交的数据为空",null);
		}
		$question=json_decode($request,true);
		$name=$question["name"];
		$phone=$question["phone"];
//		$sell=$question["sell"];
//		if($sell=="")
//		{
//			return ReturnV(0,"请填写销售名称",null);
//		}
		$where=empty($name)?"":" and `name`='".$name."'";
		$where.=empty($phone)?"":" and `phone` like '%".$phone."%'";
//		$where.=" and `sell`='".$sell."'";
		$where.=" and `infotype`=1";
		$sql="SELECT a.`id`,
		a.`name`,
		a.`sex`,
		a.`phone`,
		a.`email`,
		CASE `interest_car` 
		WHEN '8' THEN '2014大切诺基3.0L' 
		WHEN '9' THEN '2014大切诺基3.6L' 
		WHEN '10' THEN '2014大切诺基5.7L' 
		WHEN '11' THEN '2014大切诺基SRT8' 
		WHEN '12' THEN '2014指南者2.0L' 
		WHEN '13' THEN '2014指南者2.4L'
		WHEN '14' THEN '2014指南者2.4L蛇行珍藏版' 
		WHEN '15' THEN '牧马人Sahara两门款' 
		WHEN '16' THEN '牧马人Sahara四门款' 
		WHEN '17' THEN '牧马人Rubicon两门款' 
		WHEN '18' THEN '牧马人Rubicon四门款' 
		WHEN '19' THEN '牧马人Rubicon十周年纪念款' 
		WHEN '20' THEN '2014自由客2.0L' 
		WHEN '21' THEN '2014自由客2.4L' 
		WHEN '22' THEN '2014自由客2.4L蛇行珍藏版' 
		WHEN '23' THEN '2014自由光' 
		WHEN '24' THEN '300C' 
		WHEN '25' THEN '300S' 
		WHEN '26' THEN '大捷龙' 
		WHEN '27' THEN '酷威'  
		ELSE '' END AS `interest_car`,
		a.`plan_time`,	
		a.`province`,
		a.`city`,
		a.`dealer` as itouchDealer,
		b.`name` as itouchSell
		 FROM questionnaire a,car_helper b where 1=1 and a.helper_id=b.id".$where;		
		$data=PdoHelper::start()->query($sql);
		return ReturnV(1,"查询成功",$data);
		
	}
	catch (Exception $e)
	{
		WriteLog(2,"ipad查询接口错误: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
		return ReturnV(1,"查询失败，请查看错误日志",null);
	}
}

//返回提交数据结果
//$rstatus 返回状态（1 成功，0 失败）
//$rmsg 返回提交信息
function ReturnV($rstatus,$rmsg,$data)
{
	$rarr=array();
	if($rstatus==1)
	{
		$rarr["rstatus"]=$rstatus;
		$rarr["rmsg"]=$rmsg;
		$rarr["data"]=$data;
	}
	if($rstatus==0)
	{
		$rarr["rstatus"]=$rstatus;
		$rarr["rmsg"]=$rmsg;
	}
	//return urldecode(json_encode($rarr));
	return preg_replace("/\\\u([0-9a-f]{4})/ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '$1'))", json_encode($rarr));
}
?>