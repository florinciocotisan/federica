<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder008ce = null;
    private $initializer3990b = null;
    private static $publicPropertiesd024b = [
        
    ];
    public function getConnection()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getConnection', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getMetadataFactory', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getExpressionBuilder', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'beginTransaction', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getCache', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getCache();
    }
    public function transactional($func)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'transactional', array('func' => $func), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'commit', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->commit();
    }
    public function rollback()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'rollback', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getClassMetadata', array('className' => $className), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'createQuery', array('dql' => $dql), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'createNamedQuery', array('name' => $name), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'createQueryBuilder', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'flush', array('entity' => $entity), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'clear', array('entityName' => $entityName), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->clear($entityName);
    }
    public function close()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'close', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->close();
    }
    public function persist($entity)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'persist', array('entity' => $entity), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'remove', array('entity' => $entity), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'refresh', array('entity' => $entity), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'detach', array('entity' => $entity), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'merge', array('entity' => $entity), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'contains', array('entity' => $entity), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getEventManager', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getConfiguration', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'isOpen', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getUnitOfWork', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getProxyFactory', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'initializeObject', array('obj' => $obj), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'getFilters', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'isFiltersStateClean', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, 'hasFilters', array(), $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        return $this->valueHolder008ce->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer3990b = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder008ce) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder008ce = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder008ce->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer3990b && ($this->initializer3990b->__invoke($valueHolder008ce, $this, '__get', ['name' => $name], $this->initializer3990b) || 1) && $this->valueHolder008ce = $valueHolder008ce;
        if (isset(self::$publicPropertiesd024b[$name])) {
            return $this->valueHolder008ce->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
