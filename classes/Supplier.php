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

/**
 * Class SupplierCore.
 */
class SupplierCore extends ObjectModel
{
    public $id;

    /** @var int supplier ID */
    public $id_supplier;

    /** @var string Name */
    public $name;

    /** @var string|array<int, string> A short description for the discount */
    public $feed;

    /** @var string Object creation date */
    public $date_add;

    /** @var string Object last modification date */
    public $date_upd;

    /** @var string Friendly URL */
    public $adaos;

    /** @var bool active */
    public $active;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = [
        'table' => 'supplier',
        'primary' => 'id_supplier',
        'multilang' => false,
        'fields' => [
            'name' => ['type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'required' => true, 'size' => 64],
            'active' => ['type' => self::TYPE_BOOL],
            'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
            'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
            'feed' => ['type' => self::TYPE_STRING, 'validate' => 'isUrl'],
            'adaos' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
        ],
    ];


    public function __construct($id = null, $idLang = null)
    {
        parent::__construct($id, $idLang);


    }

    
    public static function getSuppliers($getNbProducts = false, $idLang = 0, $active = true, $p = false, $n = false, $allGroups = false, $withProduct = false)
    {
        if (!$idLang) {
            $idLang = Configuration::get('PS_LANG_DEFAULT');
        }
        if (!Group::isFeatureActive()) {
            $allGroups = true;
        }

        $query = new DbQuery();
        $query->select('s.*');
        $query->from('supplier', 's');
        $query->join(Shop::addSqlAssociation('supplier', 's'));
        if ($active) {
            $query->where('s.`active` = 1');
        }
        if ($withProduct) {
            $query->where('s.`id_supplier` IN (SELECT `id_supplier` FROM `' . _DB_PREFIX_ . 'product_supplier`)');
        }
        $query->orderBy(' s.`name` ASC');
        $query->limit($n, ($p - 1) * $n);
        $query->groupBy('s.id_supplier');

        $suppliers = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
        if ($suppliers === false) {
            return false;
        }
        if ($getNbProducts) {
            $sqlGroups = '';
            if (!$allGroups) {
                $groups = FrontController::getCurrentCustomerGroups();
                $sqlGroups = (count($groups) ? 'IN (' . implode(',', $groups) . ')' : '=' . (int) Group::getCurrent()->id);
            }

            $results = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
                '
					SELECT  ps.`id_supplier`, COUNT(DISTINCT ps.`id_product`) as nb_products
					FROM `' . _DB_PREFIX_ . 'product_supplier` ps
					JOIN `' . _DB_PREFIX_ . 'product` p ON (ps.`id_product`= p.`id_product`)
					' . Shop::addSqlAssociation('product', 'p') . '
					LEFT JOIN `' . _DB_PREFIX_ . 'supplier` as m ON (m.`id_supplier`= p.`id_supplier`)
					WHERE product_shop.`visibility` NOT IN ("none")' .
                    ($active ? ' AND product_shop.`active` = 1' : '') .
                    ($allGroups ? '' : '
					AND ps.`id_product` IN (
						SELECT cp.`id_product`
						FROM `' . _DB_PREFIX_ . 'category_group` cg
						LEFT JOIN `' . _DB_PREFIX_ . 'category_product` cp ON (cp.`id_category` = cg.`id_category`)
						WHERE cg.`id_group` ' . $sqlGroups . '
					)') . '
					GROUP BY ps.`id_supplier`'
                );

            $counts = [];
            foreach ($results as $result) {
                $counts[(int) $result['id_supplier']] = (int) $result['nb_products'];
            }

            foreach ($suppliers as $key => $supplier) {
                if (array_key_exists((int) $supplier['id_supplier'], $counts)) {
                    $suppliers[$key]['nb_products'] = $counts[(int) $supplier['id_supplier']];
                } else {
                    $suppliers[$key]['nb_products'] = 0;
                }
            }
        }

        $nbSuppliers = count($suppliers);
    

        return $suppliers;
    }

    
    public static function getLiteSuppliersList($idLang = null, $format = 'default')
    {
        return;
        
        $idLang = null === $idLang ? Context::getContext()->language->id : (int) $idLang;

        $suppliersList = [];
        $suppliers = Supplier::getSuppliers(false, $idLang, true);
        if ($suppliers && count($suppliers)) {
            foreach ($suppliers as $supplier) {
                if ($format === 'sitemap') {
                    $suppliersList[] = [
                        'id' => 'supplier-page-' . (int) $supplier['id_supplier'],
                        'label' => $supplier['name'],
                        'url' => Context::getContext()->link->getSupplierLink($supplier['id_supplier'], $supplier['link_rewrite']),
                        'children' => [],
                    ];
                } else {
                    $suppliersList[] = [
                        'id' => (int) $supplier['id_supplier'],
                        'link' => Context::getContext()->link->getSupplierLink($supplier['id_supplier'], $supplier['link_rewrite']),
                        'name' => $supplier['name'],
                        'desc' => $supplier['description'],
                        'children' => [],
                    ];
                }
            }
        }

        return $suppliersList;
    }

   
    protected static $cache_name = [];

    public static function getNameById($idSupplier)
    {
        if (!isset(self::$cache_name[$idSupplier])) {
            self::$cache_name[$idSupplier] = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('
			SELECT `name` FROM `' . _DB_PREFIX_ . 'supplier` WHERE `id_supplier` = ' . (int) $idSupplier);
        }

        return self::$cache_name[$idSupplier];
    }

    public static function getIdByName($name)
    {
        $result = Db::getInstance()->getRow('
		SELECT `id_supplier`
		FROM `' . _DB_PREFIX_ . 'supplier`
		WHERE `name` = \'' . pSQL($name) . '\'');

        if (isset($result['id_supplier'])) {
            return (int) $result['id_supplier'];
        }

        return false;
    }

    
    public static function getProducts(
        $idSupplier,
        $idLang,
        $p,
        $n,
        $orderBy = null,
        $orderWay = null,
        $getTotal = false,
        $active = true,
        $activeCategory = true
    ) {
        $context = Context::getContext();
        $front = true;
        if (!in_array($context->controller->controller_type, ['front', 'modulefront'])) {
            $front = false;
        }

        if ($p < 1) {
            $p = 1;
        }
        if (empty($orderBy) || $orderBy == 'position') {
            $orderBy = 'name';
        }
        if (empty($orderWay)) {
            $orderWay = 'ASC';
        }

        if (!Validate::isOrderBy($orderBy) || !Validate::isOrderWay($orderWay)) {
            die(Tools::displayError('Invalid sorting parameters provided.'));
        }

        $sqlGroups = '';
        $groups = [];
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();
            $sqlGroups = 'WHERE cg.`id_group` ' . (count($groups) ? 'IN (' . implode(',', $groups) . ')' : '=' . (int) Group::getCurrent()->id);
        }

        /* Return only the number of products */
        if ($getTotal) {
            return (int) Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('
			SELECT COUNT(DISTINCT ps.`id_product`)
			FROM `' . _DB_PREFIX_ . 'product_supplier` ps
			JOIN `' . _DB_PREFIX_ . 'product` p ON (ps.`id_product`= p.`id_product`)
			' . Shop::addSqlAssociation('product', 'p') . '
			WHERE ps.`id_supplier` = ' . (int) $idSupplier . '
			' . ($active ? ' AND product_shop.`active` = 1' : '') . '
			' . ($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '') . '
			AND p.`id_product` IN (
				SELECT cp.`id_product`
				FROM `' . _DB_PREFIX_ . 'category_product` cp
				' . (Group::isFeatureActive() ? 'LEFT JOIN `' . _DB_PREFIX_ . 'category_group` cg ON (cp.`id_category` = cg.`id_category`)' : '') . '
				' . ($activeCategory ? ' INNER JOIN `' . _DB_PREFIX_ . 'category` ca ON cp.`id_category` = ca.`id_category` AND ca.`active` = 1' : '') . '
				' . $sqlGroups . '
			)');
        }

        $nbDaysNewProduct = Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20;

        if (strpos('.', $orderBy) > 0) {
            $orderBy = explode('.', $orderBy);
            $orderBy = pSQL($orderBy[0]) . '.`' . pSQL($orderBy[1]) . '`';
        }
        $alias = '';
        if (in_array($orderBy, ['price', 'date_add', 'date_upd'])) {
            $alias = 'product_shop.';
        } elseif ($orderBy == 'id_product') {
            $alias = 'p.';
        } elseif ($orderBy == 'manufacturer_name') {
            $orderBy = 'name';
            $alias = 'm.';
        }

        $sql = 'SELECT p.*, product_shop.*, stock.out_of_stock,
					IFNULL(stock.quantity, 0) as quantity,
					pl.`description`,
					pl.`description_short`,
					pl.`link_rewrite`,
					pl.`meta_description`,
					pl.`meta_keywords`,
					pl.`meta_title`,
					pl.`name`,
					image_shop.`id_image` id_image,
					il.`legend`,
					s.`name` AS supplier_name,
					DATEDIFF(p.`date_add`, DATE_SUB("' . date('Y-m-d') . ' 00:00:00", INTERVAL ' . ($nbDaysNewProduct) . ' DAY)) > 0 AS new,
					m.`name` AS manufacturer_name' . (Combination::isFeatureActive() ? ', product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity, IFNULL(product_attribute_shop.id_product_attribute,0) id_product_attribute' : '') . '
				 FROM `' . _DB_PREFIX_ . 'product` p
				' . Shop::addSqlAssociation('product', 'p') . '
				JOIN `' . _DB_PREFIX_ . 'product_supplier` ps ON (ps.id_product = p.id_product) ' .
                (Combination::isFeatureActive() ? 'LEFT JOIN `' . _DB_PREFIX_ . 'product_attribute_shop` product_attribute_shop
				ON (p.`id_product` = product_attribute_shop.`id_product` AND product_attribute_shop.`default_on` = 1 AND product_attribute_shop.id_shop=' . (int) $context->shop->id . ')' : '') . '
				LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (p.`id_product` = pl.`id_product`
					AND pl.`id_lang` = ' . (int) $idLang . Shop::addSqlRestrictionOnLang('pl') . ')
				LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop
					ON (image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop=' . (int) $context->shop->id . ')
				LEFT JOIN `' . _DB_PREFIX_ . 'image_lang` il ON (image_shop.`id_image` = il.`id_image`
					AND il.`id_lang` = ' . (int) $idLang . ')
				LEFT JOIN `' . _DB_PREFIX_ . 'supplier` s ON s.`id_supplier` = p.`id_supplier`
				LEFT JOIN `' . _DB_PREFIX_ . 'manufacturer` m ON m.`id_manufacturer` = p.`id_manufacturer`
				' . Product::sqlStock('p', 0);

        if (Group::isFeatureActive() || $activeCategory) {
            $sql .= 'JOIN `' . _DB_PREFIX_ . 'category_product` cp ON (p.id_product = cp.id_product)';
            if (Group::isFeatureActive()) {
                $sql .= 'JOIN `' . _DB_PREFIX_ . 'category_group` cg ON (cp.`id_category` = cg.`id_category` AND cg.`id_group` ' . (count($groups) ? 'IN (' . implode(',', $groups) . ')' : '= 1') . ')';
            }
            if ($activeCategory) {
                $sql .= 'JOIN `' . _DB_PREFIX_ . 'category` ca ON cp.`id_category` = ca.`id_category` AND ca.`active` = 1';
            }
        }

        $sql .= '
				WHERE ps.`id_supplier` = ' . (int) $idSupplier . '
					' . ($active ? ' AND product_shop.`active` = 1' : '') . '
					' . ($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '') . '
				GROUP BY ps.id_product';

        if ($orderBy !== 'price') {
            $sql .= '
				ORDER BY ' . $alias . '`' . pSQL($orderBy) . '` ' . pSQL($orderWay) . '
				LIMIT ' . (((int) $p - 1) * (int) $n) . ',' . (int) $n;
        }

        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql, true, false);

        if (!$result) {
            return false;
        }

        if ($orderBy === 'price') {
            Tools::orderbyPrice($result, $orderWay);
            $result = array_slice($result, (int) (($p - 1) * $n), (int) $n);
        }

        return Product::getProductsProperties($idLang, $result);
    }

    
    public function getProductsLite($idLang)
    {
        $context = Context::getContext();
        $front = true;
        if (!in_array($context->controller->controller_type, ['front', 'modulefront'])) {
            $front = false;
        }

        $sql = '
			SELECT p.`id_product`,
				   pl.`name`
			FROM `' . _DB_PREFIX_ . 'product` p
			' . Shop::addSqlAssociation('product', 'p') . '
			LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (
				p.`id_product` = pl.`id_product`
				AND pl.`id_lang` = ' . (int) $idLang . '
			)
			INNER JOIN `' . _DB_PREFIX_ . 'product_supplier` ps ON (
				ps.`id_product` = p.`id_product`
				AND ps.`id_supplier` = ' . (int) $this->id . '
			)
			' . ($front ? ' WHERE product_shop.`visibility` IN ("both", "catalog")' : '') . '
			GROUP BY p.`id_product`';

        $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        return $res;
    }

    
    public static function supplierExists($idSupplier)
    {
        $query = new DbQuery();
        $query->select('id_supplier');
        $query->from('supplier');
        $query->where('id_supplier = ' . (int) $idSupplier);
        $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($query, false);

        return $res > 0;
    }

    
    public function delete()
    {
        $res = parent::delete();
        if ($res) {
            CartRule::cleanProductRuleIntegrity('suppliers', $this->id);

            return $this->deleteImage();
        }

        return $res;
    }

    
    public static function getProductInformationsBySupplier($idSupplier, $idProduct, $idProductAttribute = 0)
    {
        $query = new DbQuery();
        $query->select('product_supplier_reference, product_supplier_price_te, id_currency');
        $query->from('product_supplier');
        $query->where('id_supplier = ' . (int) $idSupplier);
        $query->where('id_product = ' . (int) $idProduct);
        $query->where('id_product_attribute = ' . (int) $idProductAttribute);
        $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);

        return count($res) ? $res[0] : [];
    }
}
