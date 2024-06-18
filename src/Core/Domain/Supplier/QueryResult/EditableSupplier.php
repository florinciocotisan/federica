<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
declare(strict_types=1);

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\QueryResult;

use PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierId;

/**
 * Transfers supplier data for editing
 */
class EditableSupplier
{
    /**
     * @var SupplierId
     */
    private $supplierId;

    /**
     * @var string
     */
    private $name;
    private $feed;
    private $adaos;

    /**
     * @var string[]
     */
    private $localizedDescriptions;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var int
     */
    private $countryId;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var int
     */
    private $stateId;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mobilePhone;

    /**
     * @var array
     */
    private $logoImage;

    /**
     * @var string[]
     */
    private $localizedMetaTitles;

    /**
     * @var string[]
     */
    private $localizedMetaDescriptions;

    /**
     * @var string[]
     */
    private $localizedMetaKeywords;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var array
     */
    private $associatedShops;

    /**
     * @var string
     */
    private $dni;

    /**
     * @param SupplierId $supplierId
     * @param string $name
     * @param string[] $localizedDescriptions
     * @param string $address
     * @param string $city
     * @param string $address2
     * @param int $countryId
     * @param string $postCode
     * @param int $stateId
     * @param string $phone
     * @param string $mobilePhone
     * @param string[] $localizedMetaTitles
     * @param string[] $localizedMetaDescriptions
     * @param string[] $localizedMetaKeywords
     * @param bool $enabled
     * @param array $associatedShops
     * @param string $dni
     * @param array|null $logoImage
     */
    public function __construct(
        SupplierId $supplierId,
        string $name,
        string $feed,
        string $adaos,
        string $address,
        string $city,
        int $countryId,
        int $stateId,
    ) {
        $this->supplierId = $supplierId;
        $this->name = $name;
        $this->feed = $feed;
        $this->adaos = $adaos;
        $this->address = $address;
        $this->city = $city;
        $this->countryId = $countryId;
        $this->stateId = $stateId;
        $this->enabled = true;
        $this->associatedShops = array(1);
    }

    /**
     * @return SupplierId
     */
    public function getSupplierId(): SupplierId
    {
        return $this->supplierId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getFeed(): string
    {
        return $this->feed;
    }

    
    public function getAdaos(): string
    {
        return $this->adaos;
    }

    /**
     * @return string[]
     */
    public function getLocalizedDescriptions(): array
    {
        return array();
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return '';
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return '';
    }

    /**
     * @return int
     */
    public function getStateId(): int
    {
        return $this->stateId;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return '';
    }

    /**
     * @return string
     */
    public function getMobilePhone(): string
    {
        return '';
    }

    /**
     * @return array|null
     */
    public function getLogoImage(): ?array
    {
        return $this->logoImage;
    }

    /**
     * @return string[]
     */
    public function getLocalizedMetaTitles(): array
    {
        return array();
    }

    /**
     * @return string[]
     */
    public function getLocalizedMetaDescriptions(): array
    {
        return array();
    }

    /**
     * @return string[]
     */
    public function getLocalizedMetaKeywords(): array
    {
        return array();
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return array
     */
    public function getAssociatedShops(): array
    {
        return $this->associatedShops;
    }

    /**
     * @return string
     */
    public function getDni(): string
    {
        return '';
    }
}
