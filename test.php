<?php
include_once 'global.php';


set_time_limit(1800); 
$t=time();
$content = file_get_contents('D:\xampp\htdocs\auto_show\log\test.txt');

$arr = explode("\n", $content);


//echo "<table>";

foreach ($arr as $v) {
$tmp=str_replace(',','',$v);
//echo "<tr>";
//echo "<td>" . $tmp . "</td>";
//echo "</tr>";
//unset($tmp);
PdoHelper::start()->execute("INSERT test(mobile,ADDTIME) values('$tmp',SYSDATE())");
}
$t=time()-$t;
echo "读取耗时：".$t;
//echo "</table>";


?>