<?php
require('../config/config.inc.php');
include('lib/importfunctions.php');
set_time_limit(99999);
error_reporting(E_ALL & ~E_NOTICE);


include('lib/local.php');

//$procesarenoi=2;

$numefeed='Boribon';

$import=new ImportFunctions();

$item_permited_categories=array(); 

$feeddata=file_get_contents('http://boribon.ro/feed.php?export=1&brand=Djeco');
if (file_exists('csvs/'.$numefeed.'.csv')) {
if ( (time() - filemtime('csvs/'.$numefeed.'.csv')) > (24*3600) ) {
$fh=fopen('csvs/'.$numefeed.'.csv','w');
fwrite($fh,$feeddata);
fclose($fh);
}
}
else {
$fh=fopen('csvs/'.$numefeed.'.csv','w');
fwrite($fh,$feeddata);
fclose($fh); 
}
//$feeddata=explode("\n",$feeddata);
$key=0;
$adaugate=0;
if (($handle = fopen('csvs/'.$numefeed.'.csv', "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
$key++; 
if ($key > 1) { 
    
$acceptat=false; 
if (empty($item_permited_categories)) $acceptat=true;    
else {
    if (in_array($data[17],$item_permited_categories)) $acceptat=true; }
//echo $xml->categorie.' - ';

    if ($acceptat)  {        
    
$errors=array();       
$feedprod=array();    
    
//construire sir produs

$feedprod['categories']=array(2114);
$feedprod['manufacturer']=13; 
$feedprod['supplier'] = 37;    
$feedprod['name']=str_replace('"','',$data[2]);
$feedprod['images']=array(); 
$imagini=array(); 
 
if (strlen($data[15]) > 10) $imagini[]=str_replace('"','',str_replace(' ','%20',$data[15]));
//if (strlen($data[16]) > 10) $imagini[]=str_replace('"','',str_replace(' ','%20',$data[16]));
//if (strlen($data[17]) > 10) $imagini[]=str_replace('"','',str_replace(' ','%20',$data[17]));
//if (strlen($data[18]) > 10) $imagini[]=str_replace('"','',str_replace(' ','%20',$data[18]));
//if (strlen($data[19]) > 10) $imagini[]=str_replace('"','',str_replace(' ','%20',$data[19]));
//if (strlen($data[20]) > 10) $imagini[]=str_replace('"','',str_replace(' ','%20',$data[20])); 
    
    
$feedprod['images']=$imagini; 
    
$feedprod['reference']=$data[0]; 
$feedprod['supplier_reference']=$data[0];
$feedprod['description']=$data[4];
 
$feedprod['features']=array();
//$feedprod['features'][]=array('feature'=>'Varsta', 'featurevalue'=>strval($data[6].' ani'));    
    
    
$sodprice=round((float)$data[13],0);
  
 
$feedprod['discount']='';
if (intval($feedprod['discount']) > 0)    
$feedprod['discount']=($sodprice - $feedprod['discount']) * 100 / $sodprice; 
$feedprod['discount']=(int)$feedprod['discount'];    
    
$feedprod['rrp']=$sodprice;
    
if (intval($data[14]) > 0) {
$feedprod['stock']=intval($data[14]); 
$feedprod['availability']='in stoc'; 
$feedprod['active']=1;
}
else {
$feedprod['stock']=0; 
$feedprod['availability']='indisponibil'; 
$feedprod['active']=0;
}    
    
    
if ( strpos(strtolower($feedprod['availability']),'comanda') > 0 ) $feedprod['availability']='On order';
   
var_dump($feedprod);    
    
//include('lib/processdata.php');

        break;
    
    }
 }

}
}
   
echo "finish";

?>