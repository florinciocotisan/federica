<?php

$getparentprod=Db::getInstance()->getRow("SELECT id_product, reference FROM "._DB_PREFIX_."product WHERE upc='WID_".pSQL($feedprod['parentproduct'])."'");

if ($getparentprod) {
    
$prod=new Product((int)$getparentprod['id_product']);

$getcombinations=Db::getInstance()->getRow("SELECT id_product, id_product_attribute FROM "._DB_PREFIX_."stock_available WHERE id_product='".pSQL($getparentprod['id_product'])."' AND id_product_attribute>'0' AND quantity>'0'");     
    
if ($getcombinations) $combdef=0;    
else {   
    if ((int)$feedprod['stock'] > 0) $combdef=1;
    else $combdef=0;
     }
    
    
if ((int)$prod->id > 0) {
    
    
 $sodprodattr=0;
    
foreach ($prod->getAttributesResume(2) as $pat) {
   if ($feedprod['reference'] == $pat['reference']) $sodprodattr=$pat['id_product_attribute'];     
}
    
if ($sodprodattr > 0) {
//updatecombination stock
StockAvailable::setQuantity($prod->id,$sodprodattr,$feedprod['stock'],1);
//update default combination
//Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product_attribute SET default_on='".pSQL($combdef)."' WHERE id_product='".$prod->id."' AND id_product_attribute='".pSQL($sodprodattr)."'");
//Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product_attribute_shop SET default_on='".pSQL($combdef)."' WHERE id_product='".$prod->id."' AND id_product_attribute='".pSQL($sodprodattr)."'");    
}
    
else {
    
$attributes=array();
    
foreach ($feedprod['features'] as $at) {
    $idatt=false;
    
     $searchatt=Db::getInstance()->getRow("SELECT id_attribute FROM "._DB_PREFIX_."attribute_lang WHERE name='".pSQL($at['featurevalue'])."'");
        
    if ($searchatt) $idatt=$searchatt['id_attribute'];
    else {
    $atob=new Attribute();
    if ($at['feature'] == 'Varsta')    
    $atob->id_attribute_group=1;
    else if ($at['feature'] == 'Culoare')  
    $atob->id_attribute_group=3; 
    else $atob->id_attribute_group=1; 
    $atob->name[1]=pSQL($at['featurevalue']);
    $atob->name[2]=pSQL($at['featurevalue']); 
    if ($atob->add()) {
    $lastid=Db::getInstance()->ExecuteS("SELECT id_attribute FROM "._DB_PREFIX_."attribute ORDER BY id_attribute DESC LIMIT 1");
    $idatt=$lastid[0]['id_attribute'];
    } else $idatt=false;
    } 
if ($idatt) $attributes[]=$idatt;   
}    
    
 if (!empty($attributes)) {     
     
 $idattprod=$prod->addCombinationEntity($feedprod['rrp'], 0, 0, 0, 0, $feedprod['stock'], null, $feedprod['reference'], $feedprod['supplier'], '', $combdef);    
  $combination = new Combination((int)$idattprod);
$addaugare=$combination->setAttributes($attributes);  
StockAvailable::setQuantity($prod->id,$idattprod,$feedprod['stock'],1);
$prod->addSupplierReference($feedprod['supplier'],$idattprod,$feedprod['supplier_reference']); 
Warehouse::setProductLocation($prod->id,$idattprod,5,'');     
                
 }
    
    
}
 

   
if ($getcombinations) {   
Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product SET active='1' WHERE id_product='".pSQL($getparentprod['id_product'])."'");
Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product_shop SET active='1' WHERE id_product='".pSQL($getparentprod['id_product'])."'");
} 
/*     
else {
Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product SET active='0' WHERE id_product='".pSQL($getparentprod['id_product'])."'");
Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product_shop SET active='0' WHERE id_product='".pSQL($getparentprod['id_product'])."'");
}
*/
        
    
    
}
}

?>