<?php
header('Content-Type:text/html;charset=utf-8');

include_once 'libs/Smarty.class.php';
include_once 'common/PdoHelper.class.php';
include_once 'configs/config.php';

session_start();
$_SESSION["a"]=0;
$smarty=new Smarty();

//得到根目录的绝对路径
define("ROOT",dirname(__FILE__)) ;

//设置缓存文件夹
$smarty->cache_dir=ROOT.$cache_dir;
//设置配置文件夹
$smarty->config_dir=ROOT.$config_dir;
//模板文件夹
$smarty->template_dir=ROOT.$template_dir;
//编译文件夹
$smarty->compile_dir=ROOT.$compile_dir;

//重新设置分界符
//$smarty->left_delimiter="{(";
//$smarty->right_delimiter=")}";


?>