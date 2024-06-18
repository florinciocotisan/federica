<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.security.admin_authentication.provider' shared service.

return $this->services['mbo.security.admin_authentication.provider'] = new \PrestaShop\Module\Mbo\Api\Security\AdminAuthenticationProvider(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext(), ($this->services['prestashop.core.crypto.hashing'] ?? ($this->services['prestashop.core.crypto.hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing())), ($this->services['doctrine.cache.provider'] ?? $this->getDoctrine_Cache_ProviderService()), '');
