<?php
include 'log.php';
function Post($data, $target) {
    $url_info = parse_url($target);
    $httpheader = "POST " . $url_info['path'] . " HTTP/1.0\r\n";
    $httpheader .= "Host:" . $url_info['host'] . "\r\n";
    $httpheader .= "Content-Type:application/x-www-form-urlencoded\r\n";
    $httpheader .= "Content-Length:" . strlen($data) . "\r\n";
    $httpheader .= "Connection:close\r\n\r\n";
    //$httpheader .= "Connection:Keep-Alive\r\n\r\n";
    $httpheader .= $data;

    $fd = fsockopen($url_info['host'], 6003);
    fwrite($fd, $httpheader);
    $gets = "";
    while(!feof($fd)) {
        $gets .= fread($fd, 128);
    }
    fclose($fd);
    return $gets;
}
function send($phone)
{
    //发送短信
	if(preg_match('/^[1][358][0-9]{9}$/',$phone))
	{
		$target = "http://dx.lmobile.cn:6003/submitdata/Service.asmx/g_Submit";
		$content="尊敬的阁下：\n感谢您莅临2012北京国际车展克莱斯勒展台赏车，品鉴Chrysler与Jeep旗下各车型风采！\n[克莱斯勒中国]";
		$post_data = "sname=dlbiaoyang&spwd=12345678&scorpid=&sprdid=1012812&sdst=$phone&smsg=".rawurlencode($content);
		$gets = Post($post_data, $target);
		WriteLog(2,"发送短信: ".GetHttpInfo().date("Ymd H:i:s")."\n".$GLOBALS['msg']."\n\n");
		echo $gets;
	}
}
?>