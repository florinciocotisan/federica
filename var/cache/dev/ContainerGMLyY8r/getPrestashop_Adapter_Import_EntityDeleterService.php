<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.import.entity_deleter' shared service.

return $this->services['prestashop.adapter.import.entity_deleter'] = new \PrestaShop\PrestaShop\Adapter\Import\ImportEntityDeleter(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), '', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.core.image.file_deleter'] ?? ($this->services['prestashop.core.image.file_deleter'] = new \PrestaShop\PrestaShop\Core\Image\Deleter\ImageFileDeleter())));
