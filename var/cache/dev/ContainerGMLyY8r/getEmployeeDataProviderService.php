<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\EmployeeDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository'] ?? $this->load('getEmployeeRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator())));
