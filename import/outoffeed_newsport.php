<?php
include('../config/config.inc.php');

function updateProductStock($product_data, $stock) {
        
        $update_stock = Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."stock_available SET quantity='".pSQL($stock)."' WHERE id_product='".pSQL($product_data['id_product'])."' AND id_product_attribute='".pSQL($product_data['id_product_attribute'])."' AND id_shop=1");
        
        //main product
        if ($update_stock) {
            if ($product_data['id_product_attribute'] > 0) {
                $canttotala = Db::getInstance()->getValue("SELECT SUM(quantity) FROM "._DB_PREFIX_."stock_available WHERE id_product='".pSQL($product_data['id_product'])."' AND id_product_attribute>'0' AND id_shop=1");

                if ($canttotala !== null) {
                $res = Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."stock_available SET quantity='".pSQL($canttotala)."' WHERE id_product='".pSQL($product_data['id_product'])."' AND id_product_attribute='0' AND id_shop=1");            
                }
            }
            
        }
        
        return $update_stock;
        
}


$feedstring=file_get_contents('https://www.newsport.biz/userfiles/4ba980c7-83f5-4c7e-b1da-e1e9ebd1aa0e/feeds/3efa2793-ae27-41ca-81f9-c5afa638a1b4.xml');

$products = Db::getInstance()->ExecuteS("SELECT p.id_product, p.reference FROM "._DB_PREFIX_."product p INNER JOIN "._DB_PREFIX_."product_shop ps ON p.id_product=ps.id_product WHERE p.id_supplier=18 AND ps.id_shop=1 AND p.active=1 AND p.id_product>0");

$codes = array();

foreach ($products as $p) {
    
    $combinations = Db::getInstance()->ExecuteS("SELECT pa.reference, pa.id_product_attribute FROM "._DB_PREFIX_."product_attribute pa INNER JOIN "._DB_PREFIX_."product_attribute_shop pas ON pa.id_product_attribute=pas.id_product_attribute WHERE pa.id_product='".pSQL($p['id_product'])."' AND pas.id_shop=1");
    
    if ($combinations) {
        foreach ($combinations as $c) {
            if ($c['reference'])
            $codes[] = array('reference' => $c['reference'], 'id_product' => $p['id_product'], 'id_product_attribute' => $c['id_product_attribute']);
        }
    } else if ($p['reference']) $codes[] = array('reference' => $p['reference'], 'id_product' => $p['id_product'], 'id_product_attribute' => 0);
     
}


foreach ($codes as $c) {
 
    if (strpos($feedstring, '['.$c['reference'].']]') === false) {
        //print_r($c); 
        //echo "<br />";
        
        if (!updateProductStock($c, 0)) echo 'Eroare set to zero for '.$c['reference'].' ('.json_encode($c).') <br />';
        
        //break;
    }
  
}

echo "finish";