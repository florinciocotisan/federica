<?php
require('../config/config.inc.php');
include('lib/importfunctions.php');
set_time_limit(99999);
error_reporting(E_ALL & ~E_NOTICE);

//exit();

include('lib/local.php');

$tva=9;
$taxrule=2;

//$procesarenoi=2;

$numefeed='GoldNutrition';

$import=new ImportFunctions();

$item_permited_categories = array();

//$feeddata=simplexml_load_file('https://www.newsport.biz/userfiles/4ba980c7-83f5-4c7e-b1da-e1e9ebd1aa0e/feeds/f9aff47a-1f85-46e5-a605-96a093d0b78d.xml');
$feeddata=simplexml_load_file('https://goldnutrition.ro/feeds/feed_tennis_revolution.php');
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
    
//if (strval($xml->Product_Code) == 'WR8300901130') $acceptat = true;
//else $acceptat = false;   
    
 if ($acceptat)  {
    
$errors=array();       
$feedprod=array();    
    
//construire sir produs

$feedprod['categories']=array('Feed GoldNutrition');
$feedprod['manufacturer']=strval($xml->brand); 
$feedprod['supplier'] = 19;    
$feedprod['name']=strval($xml->denumire);
$feedprod['images']=array(); 
$imagini=array(); 
  
if (strlen(strval($xml->imagine_principala)) > 10) $imagini[] = strval($xml->imagine_principala);
     
if (strlen(strval($xml->alte_imagini->imagine_1)) > 10) $imagini[] = strval($xml->alte_imagini->imagine_1);
     
if (strlen(strval($xml->alte_imagini->imagine_2)) > 10) $imagini[] = strval($xml->alte_imagini->imagine_2);
if (strlen(strval($xml->alte_imagini->imagine_3)) > 10) $imagini[] = strval($xml->alte_imagini->imagine_3);
if (strlen(strval($xml->alte_imagini->imagine_4)) > 10) $imagini[] = strval($xml->alte_imagini->imagine_4);
if (strlen(strval($xml->alte_imagini->imagine_5)) > 10) $imagini[] = strval($xml->alte_imagini->imagine_5);
     


//foreach ($xml->galerie_imagini->imagine_suplimentara as $img)    
 //if ($img != '') $imagini[]=htmlentities($img); 
    
$feedprod['images']=$imagini; 
    
$feedprod['reference']=strval($xml->sku); 
$feedprod['supplier_reference']=strval($xml->sku);
$feedprod['ean13']=strval($xml->ean);
$feedprod['description']=strval($xml->descriere);
$feedprod['description_short']='';
     
if ((int)$xml->cota_tva == 9)  {
    $tva=9;
    $taxrule=2;
} else {
    $tva=19;
    $taxrule=1;
}
    
     
$sodprice=round((float)$xml->pret_tva_inclus,2);  
 
$feedprod['discount']='';
if (intval($feedprod['discount']) > 0)    
$feedprod['discount']=($sodprice - $feedprod['discount']) * 100 / $sodprice; 
$feedprod['discount']=(int)$feedprod['discount'];    
    
$feedprod['rrp']=$sodprice;
  
$feedprod['stock']=(int)$xml->stoc; 
     
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

include('lib/processdata.php');
    
  //if ($key > 1)  
  //break;  
    
 }
 }

}
    
   
echo "finish";

?>