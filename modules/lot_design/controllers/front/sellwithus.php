<?php

class Lot_DesignSellWithUsModuleFrontController extends ModuleFrontController
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
        
        
        //$this->context->smarty->assign('brosuri',$brosuri);
		
        $this->setTemplate('module:lot_design/views/templates/front/sellwithus.tpl');
	}
    
    
    
	
}