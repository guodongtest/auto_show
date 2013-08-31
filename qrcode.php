<?php
include 'log.php';
include 'global.php';
include 'phpqrcode/qrlib.php';
try
{
	$sign="shcz";
	$phone=$_POST["phone"];
	$qrcode=$_POST["qrcode"];
	if(empty($phone))
	{
		ReturnV("请输入手机号码",$qrcode,null);
		return;
	}
	if(!preg_match("/^13[0-9]{9}|15[0-9]{9}|18[0-9]{9}$/",$phone))
	{
		ReturnV("手机号码格式错误，请重新输入",$qrcode,$phone);
		return;
	}
	$file="image";
	$path = dirname(__FILE__).DIRECTORY_SEPARATOR.$file.DIRECTORY_SEPARATOR;
	if (!file_exists($path)){
		mkdir($path);
	}
	
//	for($i=1;$i<=10;$i++)
//	{
//		for($j=1;$j<=8;$j++)
//		{
//			$model="0".$j;
//			$helper=$i<10?"0".$i:"".$i;
//			$data="http://klsl.l.cn/wapshow.php?qrcode=".$helper.$model;
			$data=base64_encode($sign.",".$phone.",".$qrcode);
			//$data=base64_encode($sign.",15210909358,1");//测试用
			//$data="http://192.168.1.110/wapshow.php?qrcode=1";
//			//$data="http://klsl.l.cn/wapshow.php?qrcode=0101";
			$filename=$path.$phone.".png";
//			$filename=$path.$helper.$model.".png";

			$errorCorrectionLevel="H";
			$matrixPointSize=7.7;
			$margin=1;
			QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, $margin);
			return;
			/*生成车型，车助编号图片*/
//			$num=$helper.$model;
			$num=$qrcode;
			$im=@imagecreate(90, 40);
		//	$im = file_get_contents($filename);
			$background_color = imagecolorallocatealpha($im, 255,255,255,0);
//			$background_color = imagecolorallocatealpha($im, 255,255,255,0);
		//	or die("Cannot Initialize new GD image stream");
		//	imagecolortransparent($im ,$white);
			$text_color = imagecolorallocate($im, 0,0,0);
//			$text_color = imagecolorallocate($im, 1,181,255);
			//imagestring($im, 7, 30, 15,$num, $text_color);
			imagettftext($im,29,0,0,30,$text_color,'font/msyh.ttf',$num);
		//	imagesavealpha($im ,true);
			imagepng($im,$path."logo1.png");
		//	imagedestroy($im);
			/*生成车型，车助编号图片*/
			
			/*为二维码加logo*/
			$QR = $filename;
			$logo=$path."logo1.png";
			if($logo != FALSE)
			{
				$QR = imagecreatefromstring(file_get_contents($QR));
				$logo = imagecreatefromstring(file_get_contents($logo));
				$QR_width = imagesx($QR);
				$QR_height = imagesy($QR);
				$logo_width = imagesx($logo);
				$logo_height = imagesy($logo);
				//$logo_qr_width = $QR_width / 5;
				$logo_qr_width = $logo_width;
				$scale = $logo_width / $logo_qr_width;
				$logo_qr_height = $logo_height / $scale;
				$from_width = ($QR_width - $logo_qr_width) / 2;
				$from_height= ($QR_height - $logo_qr_height) / 2;
				imagecopyresampled($QR, $logo, $from_width, $from_height, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
			}
			imagepng($QR,$filename);
			/*为二维码加logo*/
			//echo '<img src="'.$file.DIRECTORY_SEPARATOR.basename($filename).'" />';
//		}
//	}
	
//	$smarty->assign("qrcode",$qrcode);
//	$smarty->display("wapsucces.html");
	
}
catch(Exception $e)
{
	WriteLog(2,"生成二维码错误: ".GetHttpInfo().date("Ymd H:i:s")."\n".$e->getMessage()."\n\n");
}

function ReturnV($msg,$qrcode,$phone)
{
	global $smarty;
	$smarty->assign("qrcode",$qrcode);
	$smarty->assign("error",$msg);
	$smarty->display("waperror.html");
}

?>