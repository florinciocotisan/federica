<?php

class Lot_DesignProductAjaxModuleFrontController extends ModuleFrontController
{
	public $ssl = true;

	public function __construct()
	{
		parent::__construct();
		$this->context = Context::getContext();
	}

	
	public function initContent()
	{
		parent::initContent();
        
        $output = '';
        
        if (Tools::getValue('variantstock')) {
            
            $output = $this->getVariantsStock(Tools::getValue('variant_selection'), Tools::getValue('id_product'));
        }
        
        die(Tools::jsonEncode($output));
        
	}
    
    
    public function getVariantsStock($variant_selection, $id_product) {
        
        $attributes = explode('-',$variant_selection);
        $id_primary_attribute = (int)$attributes[1];
        
        $product_attribues = Db::getInstance()->ExecuteS("SELECT pa.id_product_attribute FROM "._DB_PREFIX_."product_attribute pa LEFT JOIN "._DB_PREFIX_."product_attribute_combination pac ON pa.id_product_attribute = pac.id_product_attribute WHERE pa.id_product='".pSQL($id_product)."' AND pac.id_attribute='".pSQL($id_primary_attribute)."'");
        
        $result = array();
        
        foreach ($product_attribues as $pa) {
            
            $getother_id_atribute = Db::getInstance()->getValue("SELECT id_attribute FROM "._DB_PREFIX_."product_attribute_combination WHERE id_product_attribute='".pSQL($pa['id_product_attribute'])."' AND id_attribute<>'".pSQL($id_primary_attribute)."'");
            
            $real_value = Db::getInstance()->getValue("SELECT name FROM "._DB_PREFIX_."attribute_lang WHERE id_attribute='".pSQL($getother_id_atribute)."' AND id_lang='".pSQL($this->context->language->id)."'");
            
            $stock = Db::getInstance()->getValue("SELECT quantity FROM "._DB_PREFIX_."stock_available WHERE id_product='".pSQL($id_product)."' AND id_product_attribute='".pSQL($pa['id_product_attribute'])."'");
            
            $result[] = $getother_id_atribute.'-'.$stock.'-'.$real_value;
            
        }
        
        return array('success' => 1, 'result' => $result);

        
    }
    
    
    
    
    
	
}