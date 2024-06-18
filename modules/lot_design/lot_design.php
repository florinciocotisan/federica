<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Lot_Design extends Module {
    
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'lot_design';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Lot.ai';
        $this->need_instance = 1;


        $this->bootstrap = true;

        parent::__construct();
        
        $this->secure_key = Tools::encrypt($this->name);

        $this->displayName = $this->l('Presta.ro Design Module');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module?');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }


    public function install()
    {
        
        return parent::install() && $this->registerHook('actionAdminControllerSetMedia');
    }

    public function uninstall()
    {

        return parent::uninstall();
    }

    
    
    
    public function hookactionAdminControllerSetMedia($params){
        
        
        Media::addJsDef(array('rp_ajax_url' => $this->_html .= $this->context->link->getModuleLink($this->name, 'ajax', array('key' => $this->secure_key, 'token' => md5(_COOKIE_KEY_ . $this->secure_key))), 'adminimportoken' => Tools::getAdminTokenLite('AdminImport', $this->context)));
        
        
        $this->context->controller->addCSS($this->_path.'views/css/back.css');
        
        $this->context->controller->addJS($this->_path.'views/js/back.js');
        
   
    }
    
   
    
    
    
    
}
