<?php

if (!isset($logmodificatstoc)) $logmodificatstoc=array();
if (!isset($logmodificatpret)) $logmodificatpret=array();
if (!isset($logdezactivate)) $logdezactivate=array();
if (!isset($logadaugate)) $logadaugate=array();
if (!isset($logalertapret)) $logalertapret=array();

$feedprod['numefeed'] = strtolower(str_replace(' ','',$numefeed));

if (Tools::getValue('dodiscount')) {
$feedprod['dodiscount'] = 1;
}

if (Tools::getValue('ignore_pricealert')) {
    $feedprod['ignore_pricealert'] = 1;
}

    

/// import/update produs 
if ( (intval($feedprod['rrp']) > 0) and ($feedprod['name'] != '') and (Validate::isCatalogName($feedprod['name'])) and (Validate::isReference($feedprod['reference'])) ) {

if (strlen($feedprod['reference']) > 32) $feedprod['reference']=substr($feedprod['reference'],0,32); 
if ( isset($feedprod['supplier_reference']) and ($feedprod['supplier_reference'] != '') ) {    
if (strlen($feedprod['supplier_reference']) > 32) $feedprod['supplier_reference']=substr($feedprod['supplier_reference'],0,32);  
}
    
if ($numefeed == 'Aadtotal')        
$search=Db::getInstance()->getRow("SELECT id_product,price FROM "._DB_PREFIX_."product WHERE reference='".$feedprod['reference']."'");    
else {  
    
    $searchcomb = Db::getInstance()->getRow("SELECT id_product, id_product_attribute, price FROM "._DB_PREFIX_."product_attribute WHERE reference='".$feedprod['reference']."'");    

    if ( isset($feedprod['supplier_reference']) and ($feedprod['supplier_reference'] != '') ) {   
    $search=Db::getInstance()->getRow("SELECT id_product FROM "._DB_PREFIX_."product_supplier WHERE product_supplier_reference='".$feedprod['supplier_reference']."'");  
    if (!$search) $search=Db::getInstance()->getRow("SELECT id_product,price FROM "._DB_PREFIX_."product WHERE reference='".$feedprod['reference']."'");      
    }
    else $search=Db::getInstance()->getRow("SELECT id_product,price FROM "._DB_PREFIX_."product WHERE reference='".$feedprod['reference']."'");

    if ($searchcomb) {
        $search = false;
    }

    //if ($feedprod['stock'] > 40) $feedprod['stock']=40; 

}
  

if ($searchcomb) {
    $import->updatestockcomb($feedprod, $searchcomb['id_product'], $searchcomb['id_product_attribute']); 
    //echo "intra";
}    
  
 
if (!$search) {
if ($adaugate < $procesarenoi) {  
if (Tools::getValue('onlyupdate')) $skip=1;
else if ($searchcomb) $skip=1;   
else {    
//category
foreach ($feedprod['categories'] as $c) {
if (isset($feedprod['categoriefeed']))    
  $res=$import->addcategory(strval($c),$feedprod['categoriefeed'],0); 
else $res=$import->addcategory(strval($c));     
    if ($res == 0) { $errors[]='['.$numefeed.'] '."Category ".$c.' could not be created for product '.$feedprod['reference']; $feedprod['id_category_default']=1289; $feedprod['catsassociated'][]=1289; }
    else { $feedprod['id_category_default']=$res; $feedprod['catsassociated'][]=$res; }
}
    
//manufacturer
if (isset($feedprod['manufacturer'])) {     
   $res=$import->addmanufacturer($feedprod['manufacturer']); 
   if ($res == 0) { $errors[]='['.$numefeed.'] '."Manufacturer ".$feedprod['manufacturer'].' could not be created '.$feedprod['reference']; $feedprod['id_manufacturer']=0; }
    else $feedprod['id_manufacturer']=$res;
}
   
//supplier
if (isset($feedprod['supplier'])) {      
   $res=$import->addsupplier(strval($feedprod['supplier'])); 
   if ($res == 0) { $errors[]='['.$numefeed.'] '."Supplier ".$feedprod['supplier'].' could not be created '.$feedprod['reference']; $feedprod['id_supplier']=0; }
    else $feedprod['id_supplier']=$res; 
}
     
//add product   
        if (empty($errors)) {    
            $feedprod['active'] = 0;
            $importare=$import->addproduct($feedprod,$taxrule,$tva);
            if (!$importare) {
            $errors[]='['.$numefeed.'] '."Product ".$feedprod['reference'].' could not be created'; }
            else { $adaugate++;
            $logadaugate[]=$feedprod['supplier_reference'];
                 }
            
        }
    else {
        $fh=fopen('feed_errors.txt','a+');
foreach ($errors as $error) {
fputs($fh, $error."\n");    
}
fclose($fh);
    }
    
}

}
}
    else {
     
    if (isset($search['id_product'])) {
    if ((int)$search['id_product'] > 0) {
        
    $updatare=false;
          
    if (isset($feedprod['supplier'])) {
        
        $sqlsuppliers=Db::getInstance()->ExecuteS("SELECT * FROM "._DB_PREFIX_."product_supplier WHERE id_product='".$search['id_product']."'");
        foreach ($sqlsuppliers as $s) {
        if ($s['id_supplier'] == $feedprod['supplier']) $updatare=true;
          }
        
    }
        
    $updatare=false;    
        
    if ($numefeed == 'NewSport') $updatare=false;   
        
    $import->updatestock($feedprod,$search['id_product']);    
        
    if ($updatare) {   
        
        //check if outofdate
        $outofdate=Db::getInstance()->getRow("SELECT id_category FROM "._DB_PREFIX_."category_product WHERE id_category='1858' AND id_product='".pSQL($search['id_product'])."'");
        
        if (!$outofdate) {
        
        
        
        //check diference 
        if ($import->checkprice($feedprod,$taxrule,$tva,$search['id_product'])) {        
        $import->updateprice($feedprod,$taxrule,$tva,$search['id_product']);
        echo 'Updatat id: '.$search['id_product'].(($feedprod['numefeed'] == 'funkids') ? ' - '.$feedprod['reference'] : '').'<br />'; 
        
        $searchprice=Db::getInstance()->getRow("SELECT price FROM "._DB_PREFIX_."product WHERE id_product='".$search['id_product']."'");
        if ( round($feedprod['rrp'] / ((100 + $tva) / 100),6) != round($searchprice['price'],6) )
        $logmodificatpret[]=$feedprod['supplier_reference'];    
            
        } else {
           $logalertapret[] = $numefeed.' - '.$feedprod['supplier_reference']; 
        }
            
        $getstock=Db::getInstance()->getRow("SELECT quantity FROM "._DB_PREFIX_."stock_available WHERE id_product='".$search['id_product']."'");
        if ($getstock['quantity'] != $feedprod['stock'])
        $logmodificatstoc[]=$feedprod['supplier_reference'];
        
        
        }
        
        
    }
    
    
    
    }
       }
            
    }
    
    

if ( isset($feedprod['supplier_reference']) and ($feedprod['supplier_reference'] != '') ) {   
$searchtrei=Db::getInstance()->getRow("SELECT id_product FROM "._DB_PREFIX_."product_supplier WHERE product_supplier_reference='".$feedprod['supplier_reference']."'");  
if (!$searchtrei) $searchtrei=Db::getInstance()->getRow("SELECT id_product FROM "._DB_PREFIX_."product WHERE reference='".$feedprod['reference']."'");      
}
else $searchtrei=false;   
    



}





//end import/updateprodus    


?>