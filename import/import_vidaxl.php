<?php
require('../config/config.inc.php');
include('lib/importfunctions.php');
set_time_limit(99999);
error_reporting(E_ALL & ~E_NOTICE);

//exit();

include('lib/local.php');

$procesarenoi=10;

$numefeed='VidaXl';

$import=new ImportFunctions();

Db::getInstance()->Execute("DELETE FROM "._DB_PREFIX_."supplier_products WHERE id_supplier=3");  

$shopcats = (array)json_decode(file_get_contents(_PS_ROOT_DIR_.'/import/lib/shopcats.json'));


$reader = new XMLReader();
$reader->open('xmls/'.strtolower($numefeed).'.xml');

$elementCounter = 0;
$readLimit = 10;

while ($reader->read()) {
    if ($reader->nodeType == XMLReader::ELEMENT && $reader->localName == 'product') {
        //$innerxml = $reader->readInnerXML();
        $outxml = $reader->readOuterXML();
        $xml = simplexml_load_string($outxml);  
        
        if (strpos($xml->Title, 'lemn reciclat') > 0 or strpos($xml->Title, 'lemn masiv reciclat') > 0) {
            //var_dump($xml);
            
            $errors=array();       
            $feedprod=array();      
            
            $feedprod['categories']=array(55); 
            
            
            $feedprod['manufacturer']= strval($xml->Brand);      
            $feedprod['supplier'] = 3;    
            $feedprod['name']=strval($xml->Title);
            
            //eliminarea masiv
            $feedprod['name'] = str_replace('lemn masiv reciclat', 'lemn reciclat', $feedprod['name']);
            
            //eliminate vidaxl name
            $feedprod['name'] = str_replace('vidaXL ', '', $feedprod['name']);
            $feedprod['name'] = str_replace('vidaxl ', '', $feedprod['name']);
            $feedprod['name'] = str_replace('VidaXL ', '', $feedprod['name']);
            $feedprod['name'] = str_replace('vidaxl ', '', $feedprod['name']);
            
            $feedprod['images']=array(); 
            $imagini=array(); 
        
            if (strlen(strval($xml->Image_1)) > 10) $imagini[] = strval($xml->Image_1);
            if (isset($xml->Image_2))
                if (strlen(strval($xml->Image_2)) > 10) $imagini[] = strval($xml->Image_2);   
            if (isset($xml->Image_3))
                if (strlen(strval($xml->Image_3)) > 10) $imagini[] = strval($xml->Image_3);   
            
            if (isset($xml->Image_3))
                if (strlen(strval($xml->Image_3)) > 10) $imagini[] = strval($xml->Image_3); 
            
            if (isset($xml->Image_4))
                if (strlen(strval($xml->Image_4)) > 10) $imagini[] = strval($xml->Image_4); 
            
            if (isset($xml->Image_5))
                if (strlen(strval($xml->Image_5)) > 10) $imagini[] = strval($xml->Image_5);  
            
            if (isset($xml->Image_6))
                if (strlen(strval($xml->Image_6)) > 10) $imagini[] = strval($xml->Image_6);
            
            if (isset($xml->Image_7))
                if (strlen(strval($xml->Image_7)) > 10) $imagini[] = strval($xml->Image_7);  
            

            $feedprod['images']=$imagini; 

            $feedprod['reference']='VX'.strval($xml->SKU); 
            $feedprod['supplier_reference']=strval($xml->SKU);

            if ((strlen($xml->EAN) < 13) && Validate::isEan13($xml->EAN))        
                $feedprod['ean13']=$xml->EAN;


            $feedprod['description']=strval($xml->HTML_description);
            $feedprod['description_short']=strval($xml->Description);

            $feedprod['features']=array();
            /*
            if (trim(strval($xml->Category)) != '')     
            $feedprod['features'][]=array('feature'=>'Categorii furnizor', 'featurevalue'=>str_replace(' > ', ' | ', strval($xml->Category))); 
            */

            $sodprice=round((float)$xml->B2B_price * (1 + $tva / 100) * 1.2,4);  

            $feedprod['discount']='';
            if (intval($feedprod['discount']) > 0)    
            $feedprod['discount']=($sodprice - $feedprod['discount']) * 100 / $sodprice; 
            $feedprod['discount']=(int)$feedprod['discount'];    

            $feedprod['rrp']=$sodprice;

            $feedprod['stock']=(int)$xml->Stock; 

            if ($feedprod['stock'] > 0) {

            $feedprod['availability']='in stoc'; 
            $feedprod['active']=1;    
            }
            else {
            $feedprod['availability']='indisponibil'; 
            $feedprod['active']=0;  
            }    

            if ( strpos(strtolower($feedprod['availability']),'comanda') > 0 ) $feedprod['availability']='On order';
            
            if ((strpos(strtolower($xml->Category), 'mobilier') > 0) or (strpos(strtolower($xml->Category), 'decorațiuni casă și accesorii') > 0)) {
            
            Db::getInstance()->Execute("INSERT INTO "._DB_PREFIX_."supplier_products (id_supplier, sku, date_add) VALUES ('".pSQL($feedprod['supplier'])."', '".pSQL($feedprod['supplier_reference'])."', NOW())");  
            
            //var_dump($feedprod);
            
            include('lib/processdata.php');
            
            $elementCounter++;
                
            }

            //break;
            
        }
        
        
    }
}




$reader->close();


if (!empty($logmodificatpret)) {
    echo "preturi modificate: ".implode(', ', $logmodificatpret);
    mail("florin@presta.ro", "Preturi modificate VidaXl pe woodbeback", "Preturi modificate: ".implode(', ', $logmodificatpret));
}

if (!empty($logalertapret)) {

 echo "preturi potential gresite: ".implode(', ', $logalertapret);
       
 mail("florin@presta.ro", "Alerte preturi VidaXl pe woodbeback", "Preturi potential gresite in feed-ul VidaXL: ".implode(', ', $logalertapret));
    
}



echo "<br />finish ".$elementCounter;

?>