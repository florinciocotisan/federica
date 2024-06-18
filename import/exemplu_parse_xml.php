<?php
require('../config/config.inc.php');
include('lib/importfunctions.php');
set_time_limit(99999);
error_reporting(E_ALL & ~E_NOTICE);


include('lib/local.php');

//$procesarenoi=2;

$numefeed='Bebex';

$import=new ImportFunctions();

$item_permited_categories = array();

$feeddata=simplexml_load_file('http://www.bebex.ro/datafeed/complete/xml/');
$key=0;
$adaugate=0;

foreach ($feeddata as $xml) {
$key++; 
if ($key > 0) {    
$acceptat=false; 
if (empty($item_permited_categories)) $acceptat=true;    
else {
    if (in_array($xml->brand,$item_permited_categories)) $acceptat=true; }
//echo $xml->categorie.' - ';
 if ($acceptat)  {
    
$errors=array();       
$feedprod=array();    
    
//construire sir produs

$feedprod['categories']=array('Bebex');
$feedprod['manufacturer']=strval($xml->brand); 
$feedprod['supplier'] = 72;    
$feedprod['name']=strval($xml->denumire);
$feedprod['images']=array(); 
$imagini=array(); 
    
if (strlen($xml->galerie_imagini->imagine_principala) > 10) $imagini[]=htmlentities($xml->galerie_imagini->imagine_principala);

//foreach ($xml->galerie_imagini->imagine_suplimentara as $img)    
 //if ($img != '') $imagini[]=htmlentities($img); 
    
$feedprod['images']=$imagini; 
    
$feedprod['reference']=strval($xml->cod); 
$feedprod['supplier_reference']=strval($xml->cod);
$feedprod['description']=strval($xml->descriere);

 
$feedprod['features']=array();
//$feedprod['features'][]=array('feature'=>'Varsta', 'featurevalue'=>strval($xml->caracteristici_produs->varsta));    
    
    
$sodprice=round((float)$xml->preturi_produs->pret,0);  
 
$feedprod['discount']='';
if (intval($feedprod['discount']) > 0)    
$feedprod['discount']=($sodprice - $feedprod['discount']) * 100 / $sodprice; 
$feedprod['discount']=(int)$feedprod['discount'];    
    
$feedprod['rrp']=$sodprice;
    
if ($xml->disponibilitate != 'Indisponibil') {
$feedprod['stock']=10; 
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
    
//end construire sir produs 

//include('lib/processdata.php');
    
    
  break;  
    
 }
 }

}
    
   
echo "finish";

?>