<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Tax\TaxComputer' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Tax\\TaxComputer'] = new \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer(($this->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\Repository\\TaxRulesGroupRepository'] ?? $this->load('getTaxRulesGroupRepositoryService.php')));
