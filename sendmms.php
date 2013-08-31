<?php
include 'log.php';
include 'global.php';
include 'mms.php';

//$info=$_REQUEST["info"];
//发送彩信
$target = "http://cf.lmobile.cn/submitdata/MmsWebInterface.asmx";
$SOAPAction = "http://MmsWebInterface.org/SubmitMms";	
ignore_user_abort(true);
//set_time_limit(0);
while(true) 
{
	$time=10;
	//echo "11111";exit();
	try 
	{
		$rmms=PdoHelper::start()->query("select id,phone from questionnaire where ismms=0 order by created desc");
		$phone;		
		if(!empty($rmms))
		{
			$time=10;
			for($i=0;$i<count($rmms);$i++)
			{
		
				$phone=$rmms[$i]["phone"];
				$path = dirname(__FILE__).DIRECTORY_SEPARATOR.'image'.DIRECTORY_SEPARATOR.$phone.".png";
				//$data = packFile($path);//多个文件用"."连接起来就可以了
				$data="test";			
				if($data != null) 
				{					
					//替换成自己的测试账号,参数顺序和wenservice对应
//					$post_data = craetePostData('kwsm', 'kwsm', '', '108', '15210909358', '[克莱斯勒-上海车展]', $data);
//					$gets = Post($post_data, $target, $SOAPAction);
//					$xml=parseNamespaceXml($gets);
//					$xml["soap_Body"]["SubmitMmsResponse"]["SubmitMmsResult"]["MsgID"];
					//判断返回状态，记录日志
					if(true)
					{
						PdoHelper::start()->execute("update questionnaire set ismms=1 where id=".$rmms[$i]["id"]);
						WriteLog(3,"发送彩信: ".GetHttpInfo().date("Ymd H:i:s")."\n".$rmms[$i]["phone"]."  发送成功".$info."\n\n");
					}
					else 
					{
						WriteLog(3,"发送彩信: ".GetHttpInfo().date("Ymd H:i:s")."\n".$rmms[$i]["phone"]."  发送失败"."\n\n");
					}
				}	
			}
		}
		else 
		{
			$time=60;
			WriteLog(0,"没有要发送的彩信: ".GetHttpInfo().date("Ymd H:i:s")."\n".$rmms[$i]["phone"]."  发送失败".$info."\n\n");
		}
		sleep($time); //暂停
		
	}
	catch(Exception $e)
	{
		WriteLog(3,"发送彩信: ".GetHttpInfo().date("Ymd H:i:s")."\n".$phone."  ".$e->getMessage()."\n\n");
	}	
}

function parseNamespaceXml($gets)
{
	preg_match("/Content-Length:.?(\d+)/",$gets,$matches);
	$length=$matches[1];
	$xmlstr=substr($gets,strlen($gets)-$length);
    $xmlstr = preg_replace('/\sxmlns="(.*?)"/', ' _xmlns="${1}"', $xmlstr);
    $xmlstr = preg_replace('/<(\/)?(\w+):(\w+)/', '<${1}${2}_${3}', $xmlstr);
    $xmlstr = preg_replace('/(\w+):(\w+)="(.*?)"/', '${1}_${2}="${3}"', $xmlstr);
    $xmlobj = simplexml_load_string($xmlstr);
    return json_decode(json_encode($xmlobj), true);
}
?>