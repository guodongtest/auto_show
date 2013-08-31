<?php
include_once '../global.php';

 $request='<?xml version="1.0" encoding="utf-8"?>//测试时请将?和>合并
 <request>
   <param name="name">张</param>
   <param name="tel">1234</param>
 </request>
 ';

//$request=file_get_contents('php://input');
$array=array();
$match="/<param\s+name=\"(.*)\"\s*>(.*)<\/param>/iUs";
if(!preg_match_all($match,$request,$array))
{
	echo to_xml1(0);
	exit;
}

$array=array_combine($array[1], $array[2]);
if(!$array)
{
	echo to_xml1(0);
	exit;
}

if(!array_key_exists('name', $array)||!array_key_exists('tel', $array))
{
	echo to_xml1(0);
	exit;
}

$where=trim($array['name'])==''?'':"where `name`='".trim($array['name'])."'";
if($where=='')
{
	if(trim($array['tel'])=='')
	{
		echo to_xml1(0);
		exit;
	}
	else
	{
		$where="where `phone` like '%".trim($array['tel'])."'";
	}
}
else
{
	$where.=" and `phone` like '%".trim($array['tel'])."'";
}
$sql="SELECT `name` AS `c0`,
	CASE `sex` WHEN '1' THEN '0' WHEN '2' THEN '1' ELSE '' END AS `c1`,
	`phone` AS `c2`,
	`email` AS `c3`,
	CASE `interest_car` WHEN '5' THEN '7' WHEN '6' THEN '2' WHEN '7' THEN '6' WHEN '8' THEN '14' WHEN '9' THEN '12' WHEN '10' THEN '8' WHEN '11' THEN '9' WHEN '12' THEN '10' WHEN '13' THEN '11' WHEN '14' THEN '18' WHEN '16' THEN '1' WHEN '17' THEN '20' ELSE '' END AS `c4`,
	`plan_budget` AS `c5`,
	`plan_time` AS `c6`,
	`models` AS `c7`,
	`brand` AS `c8`
	from `questionnaire` $where";
$array=PdoHelper::start()->query($sql);

echo to_xml1($array);


function to_xml1($array)
{
	$xml = '<?xml version="1.0" encoding="utf-8"?>';
	if(is_array($array))
	{
		$xml .= '<customs>';
		foreach ($array as $arr)
		{
			$xml .= '<custom>';
			foreach ($arr as $key => $val) 
			{
				$xml .= '<'.$key.'>'.$val.'</'.$key.'>';
			}
			$xml .= '</custom>';
		}
		$xml .= '</customs>';
	}
	else
	{
		$xml .='<error>'.$array.'</error>';
	}
//	return $xml;
    echo $xml;
}
?>