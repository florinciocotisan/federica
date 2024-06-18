<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.paypal.order.presenter' shared service.

return $this->services['ps_checkout.paypal.order.presenter'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder(($this->services['ps_checkout.repository.pscheckoutcart'] ?? $this->load('getPsCheckout_Repository_PscheckoutcartService.php')), ($this->services['ps_checkout.paypal.provider.order'] ?? $this->load('getPsCheckout_Paypal_Provider_OrderService.php')), ($this->services['ps_checkout.prestashop.router'] ?? ($this->services['ps_checkout.prestashop.router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())), ($this->services['ps_checkout.paypal.order.translations'] ?? $this->load('getPsCheckout_Paypal_Order_TranslationsService.php')), ($this->services['ps_checkout.context.shop'] ?? ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())));
