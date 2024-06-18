<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.import.handler.category' shared service.

return $this->services['prestashop.adapter.import.handler.category'] = new \PrestaShop\PrestaShop\Adapter\Import\Handler\CategoryImportHandler(($this->services['prestashop.adapter.import.data_formatter'] ?? $this->load('getPrestashop_Adapter_Import_DataFormatterService.php')), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getAllShopIds(), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getContextListShopID(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id, ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService())->isUsed(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id, ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.logger'] ?? ($this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger())), ($this->services['prestashop.adapter.data_provider.employee'] ?? $this->load('getPrestashop_Adapter_DataProvider_EmployeeService.php'))->getId(), ($this->services['prestashop.adapter.database'] ?? ($this->services['prestashop.adapter.database'] = new \PrestaShop\PrestaShop\Adapter\Database())), ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] ?? ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SmartyCacheClearer())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.validate'] ?? ($this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate())), ($this->services['prestashop.adapter.import.image_copier'] ?? $this->load('getPrestashop_Adapter_Import_ImageCopierService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), '');
