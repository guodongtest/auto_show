<?php

$xml_data = '{"item1":{"item11":{"n":"chenling",
"m":"llll"},"sex":"男","age":"25"},"item2":
{"item21":"ling","sex":"女","age":"24"}}';

date_default_timezone_set('PRC');//设置默认时区为北京时间

//$json_data = '[{"name":"张国栋3","sex":"28","phone":"15210909358","email":"wwf0008@126.com","province":"河北","city":"保定",
//"is_havecar":"2","year":"","brand":"","models":"","driven_age":"1","plan_time":"1","plan_budget":"1","interest_car":"2013牧马人Sahara 两门款",
//"dealer":"","is_followup":"1","is_receive":"1","helper_id":"801","duty":"全新进口Jeep大切诺基SRT8","isqrcode":"0","savetime":"'.date('Y-m-d H:i:s').'"}]';
//,{"name":"张国栋","sex":"28","phone":"15210909358","email":"wwf0008@126.com","province":"河北","city":"保定",
//"is_havecar":"2","year":"","brand":"","models":"","driven_age":"1","plan_time":"1","plan_budget":"1","interest_car":"1",
//"dealer":"","is_followup":"1","is_receive":"1","helper_id":"801","duty":"全新进口Jeep大切诺基SRT8"},{}]';
//$json_data = '[]';

$json_data = '[{"name":"张国栋3","sex":"28","phone":"15210909358","email":"wwf0008@126.com","province":"河北","city":"保定",
"is_havecar":"2","year":"","brand":"","models":"","driven_age":"1","plan_time":"1","plan_budget":"1","interest_car":"2013牧马人Sahara 两门款",
"dealer":"北京百盛","is_followup":"1","is_receive":"1","duty":"全新进口Jeep大切诺基SRT8","sell":"销售"}]';
$url = "http://localhost/car.php";
$header[] = "Content-type: text/json";//定义content-type为json
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
$response = curl_exec($ch);
if(curl_errno($ch))
{
    print curl_error($ch)."<br/>";
}
curl_close($ch);
//$response=json_decode($response,true);
//var_dump($response); 
echo $response;
?>