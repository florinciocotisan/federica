<?php
require('../config/config.inc.php');
include('lib/importfunctions.php');
set_time_limit(99999);
error_reporting(E_ALL & ~E_NOTICE);

//exit();

include('lib/local.php');

//$procesarenoi=2;

$numefeed='NewSport';

$import=new ImportFunctions();

$item_permited_categories = array();

//$feeddata=simplexml_load_file('https://www.newsport.biz/userfiles/4ba980c7-83f5-4c7e-b1da-e1e9ebd1aa0e/feeds/f9aff47a-1f85-46e5-a605-96a093d0b78d.xml');
$feeddata=simplexml_load_file('https://www.newsport.biz/userfiles/4ba980c7-83f5-4c7e-b1da-e1e9ebd1aa0e/feeds/3efa2793-ae27-41ca-81f9-c5afa638a1b4.xml');
$key=0;
$adaugate=0;

foreach ($feeddata as $xml) {
$key++; 
if ($key > 0) {    
$acceptat=false; 
if (empty($item_permited_categories)) $acceptat=true;    
else {
    if (in_array($xml->BrandName,$item_permited_categories)) $acceptat=true; }
//echo $xml->categorie.' - ';
    
//if (strval($xml->Product_Code) == 'WRZ4040BK') $acceptat = true;
//else $acceptat = false;   
    
 if ($acceptat)  {
    
$errors=array();       
$feedprod=array();    
    
//construire sir produs

$feedprod['categories']=array('Feed NewSport');
$feedprod['manufacturer']=strval($xml->BrandName); 
$feedprod['supplier'] = 18;    
$feedprod['name']=strval($xml->Product_Name);
$feedprod['images']=array(); 
$imagini=array(); 
$imgs=array(); 
  
if (strlen(strval($xml->Gallery_Images)) > 10) $imagini[] = strval($xml->Gallery_Images);     
     
if (strpos(strval($xml->All_Images),'#') > 0) $imgs = explode('#', strval($xml->All_Images));
else $imgs[] = strval($xml->All_Images);
     
foreach ($imgs as $i) {
    if ($i != strval($xml->Gallery_Images))
        $imagini[] = $i; 
}     
     
    
//if (strlen($xml->URL_IMAGINE) > 10) $imagini[]=htmlentities($xml->URL_IMAGINE);

//foreach ($xml->galerie_imagini->imagine_suplimentara as $img)    
 //if ($img != '') $imagini[]=htmlentities($img); 
    
$feedprod['images']=$imagini; 
    
$feedprod['reference']=strval($xml->Product_Code); 
$feedprod['supplier_reference']=strval($xml->Product_Code);
$feedprod['ean13']=strval($xml->EMAG_EAN);  
$feedprod['description']=strval($xml->Description);
$feedprod['description_short']='';

 
$feedprod['features']=array();
if (trim(strval($xml->Material__6372_)) != '')     
    $feedprod['features'][]=array('feature'=>'Material', 'featurevalue'=>strval($xml->Material__6372_)); 
if (trim(strval($xml->Tipar_corzi__9188_)) != '')      
    $feedprod['features'][]=array('feature'=>'Numarul de corzi', 'featurevalue'=>strval($xml->Tipar_corzi__9188_));
if (trim(strval($xml->Balans__9190_)) != '')      
    $feedprod['features'][]=array('feature'=>'Balans', 'featurevalue'=>strval($xml->Balans__9190_));      
if (trim(strval($xml->Lungime__6862_)) != '')      
    $feedprod['features'][]=array('feature'=>'Lungime', 'featurevalue'=>strval($xml->Lungime__6862_));
 if (trim(strval($xml->Grosime__7156_)) != '')      
    $feedprod['features'][]=array('feature'=>'Grosime', 'featurevalue'=>strval($xml->Grosime__7156_));
 if (trim(strval($xml->Culoare__5401_)) != '')      
    $feedprod['features'][]=array('feature'=>'Culoare', 'featurevalue'=>strval($xml->Culoare__5401_));  
 if (trim(strval($xml->Tip_produs__5704_)) != '')      
    $feedprod['features'][]=array('feature'=>'Tip Produs', 'featurevalue'=>strval($xml->Tip_produs__5704_));        
     	
    
    
$sodprice=round((float)$xml->Pret_de_lista_fara_tva_NEW_SPORT,2);  
 
$feedprod['discount']='';
if (intval($feedprod['discount']) > 0)    
$feedprod['discount']=($sodprice - $feedprod['discount']) * 100 / $sodprice; 
$feedprod['discount']=(int)$feedprod['discount'];    
    
$feedprod['rrp']=$sodprice;
  
$feedprod['stock']=(int)$xml->Stock; 
     
if ($feedprod['stock'] > 0) {

$feedprod['availability']='in stoc'; 
}
else {
$feedprod['availability']='indisponibil'; 
}    
     
$feedprod['active']=0;     
    
    
if ( strpos(strtolower($feedprod['availability']),'comanda') > 0 ) $feedprod['availability']='On order';
   
//var_dump($feedprod);    
    
//end construire sir produs 
if (Validate::isEan13($feedprod['ean13'])) {
    include('lib/processdata.php');
}
  //if ($key > 1)  
  //break;  
    
 }
 }

}
    
   
echo "finish ".$key;

?>