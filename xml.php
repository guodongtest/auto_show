<?php

function parseNamespaceXml($xmlstr)
{
    $xmlstr = preg_replace('/\sxmlns="(.*?)"/', ' _xmlns="${1}"', $xmlstr);
    $xmlstr = preg_replace('/<(\/)?(\w+):(\w+)/', '<${1}${2}_${3}', $xmlstr);
    $xmlstr = preg_replace('/(\w+):(\w+)="(.*?)"/', '${1}_${2}="${3}"', $xmlstr);
    $xmlobj = simplexml_load_string($xmlstr);
    return json_decode(json_encode($xmlobj), true);
}
?>