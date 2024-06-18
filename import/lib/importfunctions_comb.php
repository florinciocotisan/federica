<?php

class ImportFunctions {
 
public function validMySQLName($var) {
$var = str_replace('&','si',$var); 
$var = str_replace('®','',$var);     
$var=stripslashes($var);
$var=htmlentities($var);
$var=strip_tags($var);
;    
$var=str_replace('&trade;','',$var);
$var=str_replace('&reg;','',$var);
$var=str_replace('&copy;','',$var);  
$var = preg_replace('/[^a-zA-Z0-9\s\'\:\/\[\]\-\p{L}]/u', '', $var);    
$var = preg_replace('/[\s\'\:\/\[\]\-]+/', ' ', $var);   
    
$var=mysql_escape_string($var);
return $var;
}        
    
public function validMySQL($var) {
$var = str_replace('&','si',$var);  
$var = str_replace('®','',$var);      
$var=stripslashes($var);
$var=htmlentities($var);
$var=strip_tags($var);
    
$var=str_replace('&trade;','',$var);
$var=str_replace('&reg;','',$var);
$var=str_replace('&copy;','',$var);  
//$var = preg_replace('/[^a-zA-Z0-9\s\'\:\/\[\]\-\p{L}]/u', '', $var);    
//$var = preg_replace('/[\s\'\:\/\[\]\-]+/', ' ', $var);    
$var=mysql_escape_string($var);
return $var;
}    

public function addcategory($categoryname, $id_parent = 2, $activ = 1) {
    
     global $cookie;
    
    if (is_numeric($categoryname)) $idcategory=$categoryname; 
    else {
        
    
    if (strlen($categoryname) > 128) $categoryname=substr($categoryname,0,126);
    $categoryname=pSQL($categoryname);
    
    $search=Db::getInstance()->getRow("SELECT id_category FROM "._DB_PREFIX_."category_lang WHERE name='$categoryname'");
    $idcategory=0;
    if ($search)
        $idcategory=$search['id_category'];
    else {
        $catob=new Category();
        $catob->active=$activ;
        $catob->id_parent=$id_parent;
        
        $catob->name[1]=$categoryname;
        $catob->name[$cookie->id_lang]=$categoryname;
        
        $catob->link_rewrite[1]=Tools::link_rewrite($categoryname,true);
        $catob->link_rewrite[$cookie->id_lang]=Tools::link_rewrite($categoryname,true);    
       
       if ($catob->add()) {
                 $lastidcat=Db::getInstance()->ExecuteS("SELECT id_category FROM "._DB_PREFIX_."category ORDER BY id_category DESC LIMIT 1");         
                $idcategory=(int)$lastidcat[0]['id_category'];          
                          }
        
    }
    
    }
    
return $idcategory;    
    
}
    
    
public function addmanufacturer($manufacturername) {
   
     global $cookie;
    
    if (is_numeric($manufacturername)) $idmanufacturer=$manufacturername; 
    
    else {
    if (strlen($manufacturername) > 64) $manufacturername=substr($manufacturername,0,126);
    $manufacturername=pSQL($manufacturername);
    
    $search=Db::getInstance()->getRow("SELECT id_manufacturer FROM "._DB_PREFIX_."manufacturer WHERE name='$manufacturername'");
    $idmanufacturer=0;
    if ($search)
        $idmanufacturer=$search['id_manufacturer'];
    else {
        $manu=new Manufacturer();
        $manu->name=$manufacturername;
        $manu->active=1;
        if ($manu->add()) $idmanufacturer=$manu->id_manufacturer; 
    }
    
    }
return $idmanufacturer;    
    
}
    

public function addsupplier($suppliername) {
    
    global $cookie;
    
   
    if (is_numeric($suppliername)) $idsupplier=$suppliername;     
     
  else {    
     if (strlen($suppliername) > 64) $suppliername=substr($suppliername,0,64);
    $suppliername=pSQL($suppliername);
    
    
    $search=Db::getInstance()->getRow("SELECT id_supplier FROM "._DB_PREFIX_."supplier WHERE name='$suppliername'");
    
    
    $idsupplier=0;
    
    if ($search)
        $idsupplier=$search['id_supplier'];
    else {
        $supplier=new Supplier();
        $supplier->name=$suppliername;
        $supplier->active=1;
        if ($supplier->add()) $idsupplier=$supplier->id_supplier; 
    }
    
  }
return $idsupplier;    
} 
    

public function addfeature($idproduct,$feature,$featurevalue) {
     global $cookie;
    
    if ( (strlen($feature)<128) and (strlen($featurevalue)<255) ) {
        $feature=pSQL($feature);
        $featurevalue=pSQL($featurevalue);
    
    $search=Db::getInstance()->getRow("SELECT id_feature FROM "._DB_PREFIX_."feature_lang WHERE name='$feature'");
    if ($search)
        $idfeature=$search['id_feature'];
    else {
        $featureob=new Feature();
        $featureob->name[1]=$feature;
        $featureob->name[$cookie->id_lang]=$feature;
        if ($featureob->add()) $idfeature=$featureob->id; 
    }
        
    $searchvalue=Db::getInstance()->getRow("SELECT id_feature_value FROM "._DB_PREFIX_."feature_value_lang WHERE value='$featurevalue'");
            if ($searchvalue) 
             $idfeaturevalue=$searchvalue['id_feature_value'];
            else {
                $featurevalueob=new FeatureValue();
                $featurevalueob->id_feature=$idfeature;
                $featurevalueob->value[1]=$featurevalue;
                $featurevalueob->value[$cookie->id_lang]=$featurevalue;
                if ($featurevalueob->add()) $idfeaturevalue=$featurevalueob->id; 
            }   
    
    $addtoproduct=Db::getInstance()->Execute("INSERT INTO "._DB_PREFIX_."feature_product (id_feature, id_product, id_feature_value) VALUE ('$idfeature', '$idproduct', '$idfeaturevalue')");
    
    if ($addtoproduct) return true;
    else return false;
    
        
    }
    else return false;
    
}
    
    
public function addimages($idproduct,$images) {
  $response='';  
    if (!empty($images)) {
    $cover=1;  
$shops=array(1);    
foreach ($images as $im) {      
$url=$im;    
    
    $image = new Image();
        $image->id_product = $idproduct; 
        $image->position = Image::getHighestPosition($idproduct) + 1;
        $image->cover = $cover;
							// file_exists doesn't work with HTTP protocol
							if (($field_error = $image->validateFields(UNFRIENDLY_ERROR, true)) === true &&
								($lang_field_error = $image->validateFieldsLang(UNFRIENDLY_ERROR, true)) === true && $image->add())
							{
								// associate image to selected shops
								$image->associateTo($shops);
								if (!$this->copyImg($idproduct, $image->id, $url, 'products', !Tools::getValue('regenerate')))
								{
									$image->delete();
									$response.='Error copying image: '.$url.'<br />';
								}
							}    

$cover=0;    
}
    }

    if ($response == '') return true;
    else return false;    
    
}
    
    
    
    
public function changeimages($idproduct,$images) {
  $response='';  
    
Db::getInstance()->Execute("DELETE FROM "._DB_PREFIX_."image WHERE id_product='$idproduct'");
    Db::getInstance()->Execute("DELETE FROM "._DB_PREFIX_."image_shop WHERE id_product='$idproduct'");
    
    
    if (!empty($images)) {
    $cover=1;  
$shops=array(1);    
foreach ($images as $im) {      
$url=$im;    
    
    $image = new Image();
        $image->id_product = $idproduct; 
        $image->position = Image::getHighestPosition($idproduct) + 1;
        $image->cover = $cover;
							// file_exists doesn't work with HTTP protocol
							if (($field_error = $image->validateFields(UNFRIENDLY_ERROR, true)) === true &&
								($lang_field_error = $image->validateFieldsLang(UNFRIENDLY_ERROR, true)) === true && $image->add())
							{
								// associate image to selected shops
								$image->associateTo($shops);
								if (!$this->copyImg($idproduct, $image->id, $url, 'products', !Tools::getValue('regenerate')))
								{
									$image->delete();
									$response.='Error copying image: '.$url.'<br />';
								}
							}    

$cover=0;    
}
    }

    if ($response == '') return true;
    else return false;    
    
}    
    
    
public function removediscounts($idproduct,$discountpercentage) {
    
/*    
    
$reduceriactuale=Db::getInstance()->ExecuteS("SELECT id_specific_price FROM "._DB_PREFIX_."specific_price WHERE id_product='$idproduct' AND id_specific_price_rule='0'");
    
 foreach ($reduceriactuale as $ra) {
   $specific_price = new SpecificPrice($ra['id_specific_price']);
   $specific_price->delete();  
 }
 */
 
}
    

public function adddiscount($idproduct,$discountpercentage) {
    
    
/*    
if ($idproduct > 0) {
    
    
$reduceriactuale=Db::getInstance()->ExecuteS("SELECT id_specific_price FROM "._DB_PREFIX_."specific_price WHERE id_product='$idproduct' AND id_specific_price_rule='0'");
    
 foreach ($reduceriactuale as $ra) {
   $specific_price = new SpecificPrice($ra['id_specific_price']);
   $specific_price->delete();  
 }   

$specific_price = new SpecificPrice();    
 $specific_price->id_product = (int)$idproduct;
$specific_price->id_specific_price_rule = 0;
$specific_price->id_shop = 1;
$specific_price->id_currency = 0;
                        $specific_price->id_country = 0;
                        $specific_price->id_group = 0;
                        $specific_price->price = -1;
                        $specific_price->id_customer = 0;
                        $specific_price->from_quantity = 1;

    $reducerea=abs((float)$discountpercentage);
if ($reducerea < 1) $reducerea=$reducerea*100;
$reducerea=$reducerea/100;  
    
$specific_price->reduction = $reducerea;
$specific_price->reduction_type = 'percentage';  

$specific_price->from = '0000-00-00 00:00:00';
$specific_price->to = '0000-00-00 00:00:00';    
    
 $specific_price->save(); 
    
    
}
*/    
    
}   
    
public function addproduct($feedprod,$taxrule,$tva) {
      global $cookie;
    
//validari
if (strlen($feedprod['name']) > 128) $feedprod['name']=substr($feedprod['name'],0,126); 
//end validari    
    
$prod=new Product();
$prod->reference=pSQL($feedprod['reference']);
$prod->supplier_reference=pSQL($feedprod['supplier_reference']);    
$prod->price=round($feedprod['rrp'] / ((100 + $tva) / 100),6);

    $prod->id_tax_rules_group=$taxrule;  

$feedprod['name'] = str_replace('®','',$feedprod['name']);      
//$feedprod['name']=htmlentities($feedprod['name']);        
$prod->name[1]=pSQL($feedprod['name']);
$prod->name[$cookie->id_lang]=pSQL($feedprod['name']);
    
if ($feedprod['meta_title']) {
$prod->meta_title[1]=pSQL($feedprod['meta_title']);
$prod->meta_title[$cookie->id_lang]=pSQL($feedprod['meta_title']);     
}
    
    
    
if (strlen($feedprod['description']) > 390) {   
$propozitii=explode('.',$feedprod['description']);
if (count($propozitii) < 2) $propozitii=explode('!',$feedprod['description']);
if (count($propozitii) < 2) $propozitii=explode('?',$feedprod['description']);      
$descrierescurta='';  
$idj=0;    
while (strlen($descrierescurta.$propozitii[$idj]) < 400) {
$descrierescurta.=$propozitii[$idj].'.'; 
$idj++;
}
    
if ($descrierescurta == '') $descrierescurta=substr($feedprod['description'],0,200);
    
$prod->description_short[1]=pSQL($descrierescurta,true);
$prod->description_short[$cookie->id_lang]=pSQL($descrierescurta,true);
   
$prod->description[1]=pSQL($feedprod['description'],true);
$prod->description[$cookie->id_lang]=pSQL($feedprod['description'],true);
    
} else {
    $prod->description_short[1]=pSQL($feedprod['description'],true);
$prod->description_short[$cookie->id_lang]=pSQL($feedprod['description'],true);    
}
    
$prod->link_rewrite[1]=Tools::link_rewrite($feedprod['name'],true);
$prod->link_rewrite[$cookie->id_lang]=Tools::link_rewrite($feedprod['name'],true);    
    
$prod->id_category_default=$feedprod['id_category_default'];
    
if ($feedprod['id_manufacturer'] > 0) $prod->id_manufacturer = $feedprod['id_manufacturer'];
if ($feedprod['id_supplier'] > 0) $prod->id_supplier = $feedprod['id_supplier'];

$prod->quantity=(int)$feedprod['stock'];   
    
if ($feedprod['stock'] == 0) 
    if ($feedprod['availability'] == 'On order') $prod->out_of_stock=1;
    else $prod->out_of_stock=0;
    
if (isset($feedprod['active'])) $prod->active=$feedprod['active'];     
  
if ($prod->add()) { 
    
    
    StockAvailable::setQuantity($prod->id,0,(int)$feedprod['stock'],1); 
    
    if (!empty($feedprod['catsassociated'])) $prod->updateCategories($feedprod['catsassociated']);
    
    if ($feedprod['id_supplier'] > 0) $prod->addSupplierReference((int)$feedprod['id_supplier'],0,$feedprod['supplier_reference']);  
    
    if (!empty($feedprod['images'])) $this->addimages($prod->id,$feedprod['images']);
    
    if ($feedprod['discount'] > 0) $this->adddiscount($prod->id,$feedprod['discount']);
    
    foreach ($feedprod['features'] as $fv) $this->addfeature($prod->id,$fv['feature'],$fv['featurevalue']);
    
    //just for ookee 
    Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product_shop SET id_supplier='".$feedprod['id_supplier']."', id_manufacturer='".$feedprod['id_manufacturer']."' WHERE id_product='".$prod->id."'");
    
    
    
    return true;
                  }
    
    else return false;
    
    
    
}
    
    

   
public function updatestock($feedprod,$id_product) {    
    
//StockAvailable::setQuantity($id_product,0,(int)$feedprod['stock'],1);
$defattribute=0;    
$uptotal=Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."stock_available SET quantity='".(int)$feedprod['stock']."' WHERE id_product='$id_product' AND id_product_attribute='$defattribute'");       
}
    
    
public function checkprice($feedprod,$taxrule,$tva,$id_product) {

    $feedprice=round($feedprod['rrp'] / ((100 + $tva) / 100),6);
    
    $getcurrentprice = Db::getInstance()->getRow("SELECT price FROM "._DB_PREFIX_."product WHERE id_product='$id_product'"); 
    
    if ($feedprice < (float)$getcurrentprice['price']) {
        $diferenta = (float)$getcurrentprice['price'] - $feedprice;
    $procentdif = round($diferenta * 100 / (float)$getcurrentprice['price']);
        if ($procentdif > 15) return false;
        else return true;
    } else return true;
    
}    
    

public function updateprice($feedprod,$taxrule,$tva,$id_product) {
    
//$prod=new Product($id_product);  
$newprice=round($feedprod['rrp'] / ((100 + $tva) / 100),6); 
//$prod->id_tax_rules_group=$taxrule;
/*    
if ( round($newprice,4) != round($prod->price,4) ) {   
$prod->price=round($feedprod['rrp'] / ((100 + $tva) / 100),6);
$prod->update();
}*/
Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product SET id_tax_rules_group='$taxrule', price='$newprice' WHERE id_product='$id_product'"); 
Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."product_shop SET id_tax_rules_group='$taxrule', price='$newprice' WHERE id_product='$id_product'");     
    
if ($feedprod['discount'] > 0) $this->adddiscount($id_product,$feedprod['discount']);
//else  $this->removediscounts($id_product,$feedprod['discount']);     
    
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
public function copyImg($id_entity, $id_image = null, $url, $entity = 'products', $regenerate = true)
    {
        $tmpfile = tempnam(_PS_TMP_IMG_DIR_, 'ps_import');
        $watermark_types = explode(',', Configuration::get('WATERMARK_TYPES'));

        switch ($entity) {
            default:
            case 'products':
                $image_obj = new Image($id_image);
                $path = $image_obj->getPathForCreation();
            break;
            case 'categories':
                $path = _PS_CAT_IMG_DIR_.(int)$id_entity;
            break;
            case 'manufacturers':
                $path = _PS_MANU_IMG_DIR_.(int)$id_entity;
            break;
            case 'suppliers':
                $path = _PS_SUPP_IMG_DIR_.(int)$id_entity;
            break;
        }

        $url = urldecode(trim($url));
        $parced_url = parse_url($url);

        if (isset($parced_url['path'])) {
            $uri = ltrim($parced_url['path'], '/');
            $parts = explode('/', $uri);
            foreach ($parts as &$part) {
                $part = rawurlencode($part);
            }
            unset($part);
            $parced_url['path'] = '/'.implode('/', $parts);
        }

        if (isset($parced_url['query'])) {
            $query_parts = array();
            parse_str($parced_url['query'], $query_parts);
            $parced_url['query'] = http_build_query($query_parts);
        }

        if (!function_exists('http_build_url')) {
            require_once(_PS_TOOL_DIR_.'http_build_url/http_build_url.php');
        }

        $url = http_build_url('', $parced_url);

        $orig_tmpfile = $tmpfile;

        if (Tools::copy($url, $tmpfile)) {
            // Evaluate the memory required to resize the image: if it's too much, you can't resize it.
            if (!ImageManager::checkImageMemoryLimit($tmpfile)) {
                @unlink($tmpfile);
                return false;
            }

            $tgt_width = $tgt_height = 0;
            $src_width = $src_height = 0;
            $error = 0;
            ImageManager::resize($tmpfile, $path.'.jpg', null, null, 'jpg', false, $error, $tgt_width, $tgt_height, 5,
                                 $src_width, $src_height);
            $images_types = ImageType::getImagesTypes($entity, true);

            if ($regenerate) {
                $previous_path = null;
                $path_infos = array();
                $path_infos[] = array($tgt_width, $tgt_height, $path.'.jpg');
                foreach ($images_types as $image_type) {
                    $tmpfile = $this->get_best_path($image_type['width'], $image_type['height'], $path_infos);

                    if (ImageManager::resize($tmpfile, $path.'-'.stripslashes($image_type['name']).'.jpg', $image_type['width'],
                                         $image_type['height'], 'jpg', false, $error, $tgt_width, $tgt_height, 5,
                                         $src_width, $src_height)) {
                        // the last image should not be added in the candidate list if it's bigger than the original image
                        if ($tgt_width <= $src_width && $tgt_height <= $src_height) {
                            $path_infos[] = array($tgt_width, $tgt_height, $path.'-'.stripslashes($image_type['name']).'.jpg');
                        }
                        if ($entity == 'products') {
                            if (is_file(_PS_TMP_IMG_DIR_.'product_mini_'.(int)$id_entity.'.jpg')) {
                               unlink(_PS_TMP_IMG_DIR_.'product_mini_'.(int)$id_entity.'.jpg');
                            }
                            if (is_file(_PS_TMP_IMG_DIR_.'product_mini_'.(int)$id_entity.'_'.(int)Context::getContext()->shop->id.'.jpg')) {
                               unlink(_PS_TMP_IMG_DIR_.'product_mini_'.(int)$id_entity.'_'.(int)Context::getContext()->shop->id.'.jpg');
                            }
                        }
                    }
                    if (in_array($image_type['id_image_type'], $watermark_types)) {
                        Hook::exec('actionWatermark', array('id_image' => $id_image, 'id_product' => $id_entity));
                    }
                }
            }
        } else {
            @unlink($orig_tmpfile);
            return false;
        }
        unlink($orig_tmpfile);
        return true;
    }



public function get_best_path($tgt_width, $tgt_height, $path_infos)
    {
        $path_infos = array_reverse($path_infos);
        $path = '';
        foreach ($path_infos as $path_info) {
            list($width, $height, $path) = $path_info;
            if ($width >= $tgt_width && $height >= $tgt_height) {
                return $path;
            }
        }
        return $path;
    }    
    
    
    
    
    
    
    
    
}