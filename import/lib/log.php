<?php

if (isset($numefeed) and isset($logmodificatstoc) and isset($logmodificatpret) and isset($logdezactivate) and isset($logadaugate)) {

Db::getInstance()->Execute("INSERT INTO "._DB_PREFIX_."feedlogs (feed, stocuri, preturi, dezactivate, adaugate, date_add) VALUES ('$numefeed', '".implode(',',$logmodificatstoc)."', '".implode(',',$logmodificatpret)."', '".implode(',',$logdezactivate)."', '".implode(',',$logadaugate)."', NOW())");

}

if (isset($numefeed) and isset($logalertapret)) {
    
if (!empty($logalertapret)) {    
$header = "From: office@ookee.ro\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$header.= "X-Priority: 1\r\n"; 
    
$message = implode(', ',$logalertapret);
    
    
mail('andrei.dancila@ookee.ro', 'Alerte Pret pe feed-uri', $message, $header);    }
    
}



?>