<?php
function packFile($file_name) {
    if(is_file($file_name)) {
        $data = file_get_contents($file_name);
        return basename($file_name) . pack('C', '0') . pack('I', strlen($data)) . $data;
    }
    return null;
}
function craetePostData($sname, $spwd, $scorpid, $sprdid, $tels, $mms_title, $mms_data) {
    $postDataStr = "<?xml version=\"1.0\" encoding=\"utf-8\"?><soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Body><SubmitMms xmlns=\"http://MmsWebInterface.org/\">";
    $postDataStr .= "<UserID>" . $sname . "</UserID>";
    $postDataStr .= "<Password>" . $spwd . "</Password>";
    $postDataStr .= "<CorpID>" . $scorpid . "</CorpID>";
    $postDataStr .= "<PrdID>" . $sprdid . "</PrdID>";
    $postDataStr .= "<DstID>" . $tels . "</DstID>";
    $postDataStr .= "<MmsSubject>" . $mms_title . "</MmsSubject>";
    $postDataStr .= "<TmsBuffer>" . base64_encode($mms_data) . "</TmsBuffer>";
    $postDataStr .= "</SubmitMms></soap:Body></soap:Envelope>";
    return $postDataStr;
}
function Post($data, $target, $SOAPAction) {
    $url_info = parse_url($target);
    $httpheader = "POST " . $url_info['path'] . " HTTP/1.1\r\n";
    $httpheader .= "Host:" . $url_info['host'] . "\r\n";
    $httpheader .= "Content-Type:text/xml; charset=utf-8\r\n";
    $httpheader .= "Content-Length:" . strlen($data) . "\r\n";
    $httpheader .= "SOAPAction:" . $SOAPAction . "\r\n";   
    $httpheader .= "Connection:close\r\n\r\n";
//    $httpheader .= "Connection:Keep-Alive\r\n\r\n";
    $httpheader .= $data;
    $fd = fsockopen($url_info['host'], 80);
    fwrite($fd, $httpheader);
    $gets = "";
    while(!feof($fd)) {
        $gets .= fread($fd, 128);
    }
    fclose($fd);
    return $gets;
}
?>