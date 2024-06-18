<?php

class Lot_DesignNewsletterSubscribeModuleFrontController extends ModuleFrontController
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
        
        if (Tools::getValue('email')) {
            
            $output = $this->subscribe(Tools::getValue('email'));
        }
        
        die(Tools::jsonEncode($output));
        
	}
    
    
    public function subscribe($customer_email) {
        
        if (!Validate::isEmail($customer_email)) return array('success' => 0, 'message' => 'Email invalid!');
        
        $sql = 'SELECT `newsletter`
                FROM '._DB_PREFIX_.'customer
                WHERE `email` = \''.pSQL($customer_email).'\'
                AND id_shop = '.$this->context->shop->id;
        
        if ($newsletter = Db::getInstance()->getValue($sql)) {
        
        if ((int)$newsletter == 1) return array('success' => 1, 'message' => 'Esti deja abonat!');
        else Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."customer SET newsletter='1' WHERE email='".pSQL($customer_email)."'");
        
        } else {
            
            $sql = 'SELECT `email`, `active` FROM '._DB_PREFIX_.'emailsubscription
                WHERE `email` = \''.pSQL($customer_email).'\'
                AND id_shop = '.$this->context->shop->id;
            
            if ($newsletter = Db::getInstance()->getRow($sql)) {
                if ((int)$newsletter['active'] == 1)
                    return array('success' => 1, 'message' => 'Esti deja abonat!');
                else Db::getInstance()->Execute("UPDATE "._DB_PREFIX_."emailsubscription SET active='1' WHERE email='".pSQL($customer_email)."'");
            }
            else {
                
                $active = 1;
                
                $sql = 'INSERT INTO '._DB_PREFIX_.'emailsubscription (id_shop, id_shop_group, email, newsletter_date_add, ip_registration_newsletter, http_referer, active)
                VALUES
                ('.$this->context->shop->id.',
                '.$this->context->shop->id_shop_group.',
                \''.pSQL($customer_email).'\',
                NOW(),
                \''.pSQL(Tools::getRemoteAddr()).'\',
                (
                    SELECT c.http_referer
                    FROM '._DB_PREFIX_.'connections c
                    WHERE c.id_guest = '.(int) $this->context->customer->id.'
                    ORDER BY c.date_add DESC LIMIT 1
                ),
                '.(int) $active.'
                )';
                
                Db::getInstance()->Execute($sql);
                
                
            }
            
        }
    

        return array('success' => 1, 'message' => 'Multumim pentru abonare!');

        
    }
    
    
    
	
}