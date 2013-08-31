<?php
	include 'phpqrcode/qrlib.php';
	
	return;
	$a="13011002211";
	$sign="sign";
	echo $a."      ".encrypt($a,$sign)."       ".decrypt(encrypt($a,$sign),$sign);
	$path = dirname(__FILE__).DIRECTORY_SEPARATOR.'image'.DIRECTORY_SEPARATOR;
	if (!file_exists($path)){
		mkdir($path);
	}
	$data="http://www.baidu.com";
	$filename=$path.".png";
	$errorCorrectionLevel="L";
	$matrixPointSize=4;
	$margin=1;
	QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, $margin);
	echo '<img src="'."image".DIRECTORY_SEPARATOR.basename($filename).'" />';
	$value="shcz15210909358";
	//echo $value."      ".encrypt($value,"")."     ".decrypt(encrypt($value,""),"");
	
	function keyED($txt,$encrypt_key)
	{
		$encrypt_key = md5($encrypt_key);
		$ctr=0;
		$tmp = "";
		for ($i=0;$i<strlen($txt);$i++)
		{
			if ($ctr==strlen($encrypt_key)) $ctr=0;
			$tmp.= substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1);
			$ctr++;
		}
		return $tmp;
	}
	function encrypt($txt,$key)
	{
		srand((double)microtime()*1000000);
		$encrypt_key = md5(rand(0,32000));
		$ctr=0;
		$tmp = "";
		for ($i=0;$i<strlen($txt);$i++) {
			if ($ctr==strlen($encrypt_key)) $ctr=0;
			$tmp .= substr($encrypt_key,$ctr,1) . (substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1));
			$ctr++;
		}
		return keyED($tmp,$key);
	}
	function decrypt($txt,$key)
	{
		$txt = keyED($txt,$key);
		$tmp = "";
		for ($i=0;$i<strlen($txt);$i++) {
			$md5 = substr($txt,$i,1);
			$i++;
			$tmp.= (substr($txt,$i,1) ^ $md5);
		}
		return $tmp;
	}
?>