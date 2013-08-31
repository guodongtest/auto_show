<?php
    date_default_timezone_set("PRC");
    $loglevels=array
    (   
       0=>"NONE",
       1=>"INFO",
       2=>"ERROR",
       3=>"MMS"
    );
 

    //写入日志文件
    function WriteLog($level,$message)
    {
        global $loglevels;
        
        $logfilename=$loglevels[$level].date("Ymd");
        $logpath=$_SERVER['DOCUMENT_ROOT']."/log";
        //$logpath="D:/xampp/htdocs/auto_show"."/log"; //测试用
        if(!file_exists($logpath)){
            mkdir($logpath,0777,TRUE);
        }
        $logsavepath=$logpath."/".$logfilename.".txt";
        $fd=fopen($logsavepath,"a");
        fputs($fd,$message);
        fclose($fd);
    }
    
      //获取请求信息
    function GetHttpInfo()
    {
        return "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."  ";
    }
?>