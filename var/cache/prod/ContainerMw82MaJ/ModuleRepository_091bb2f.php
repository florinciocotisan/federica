<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder008ce = null;
    private $initializer3990b = null;
    private static $publicPropertiesd024b = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getList', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getInstalledModules', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getMustBeConfiguredModules', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getUpgradableModules', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'setActionUrls', array('collection' => $collection), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer3990b = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder008ce) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder008ce = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder008ce->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, '__get', ['name' => $name], $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        if (isset(self::$publicPropertiesd024b[$name])) {
            return $this->valueHolder008ce->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder008ce;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder008ce;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder008ce;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder008ce;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, '__isset', array('name' => $name), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder008ce;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder008ce;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, '__unset', array('name' => $name), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder008ce;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder008ce;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, '__clone', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        $this->valueHolder008ce = clone $this->valueHolder008ce;
    }
    public function __sleep()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, '__sleep', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return array('valueHolder008ce');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3990b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3990b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'initializeProxy', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder008ce;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder008ce;
    }
}
