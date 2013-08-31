<?php
	include 'mms.php';
	$file="image";
	$path = dirname(__FILE__).DIRECTORY_SEPARATOR.$file.DIRECTORY_SEPARATOR;
	//发送彩信
	$target = "http://cf.lmobile.cn/submitdata/MmsWebInterface.asmx";
	$SOAPAction = "http://MmsWebInterface.org/SubmitMms";
//	$SOAPAction="http://MmsWebInterface.org/SubmitMmsWithEms";
	$data=packFile($path."mms.txt");
	$data .= packFile($path."15210909358.jpg");//多个文件用"."连接起来就可以了
	//替换成自己的测试账号,参数顺序和wenservice对应 , 18612977109,15210909358,18632114162,13581537524
	$post_data = craetePostData('dlklslcz', 'LU6KwuK6', '', '2011828', '15601122701', '克莱斯勒 三重好礼 "码"上抢', $data);
	$gets = Post($post_data, $target, $SOAPAction);
//	preg_match("/Content-Length:.?(\d+)/",$gets,$matches);
//	$length=$matches[1];
//	$gets=substr($gets,strlen($gets)-$length);
	echo $gets;
	//发送彩信
?>