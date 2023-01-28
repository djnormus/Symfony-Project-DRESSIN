<?php

namespace ContainerJUX7eJu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6505a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55dce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties89907 = [
        
    ];

    public function getConnection()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getConnection', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getMetadataFactory', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getExpressionBuilder', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'beginTransaction', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getCache', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'transactional', array('func' => $func), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'commit', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->commit();
    }

    public function rollback()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'rollback', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getClassMetadata', array('className' => $className), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'createQuery', array('dql' => $dql), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'createNamedQuery', array('name' => $name), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'createQueryBuilder', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'flush', array('entity' => $entity), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'clear', array('entityName' => $entityName), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->clear($entityName);
    }

    public function close()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'close', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->close();
    }

    public function persist($entity)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'persist', array('entity' => $entity), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'remove', array('entity' => $entity), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'refresh', array('entity' => $entity), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'detach', array('entity' => $entity), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'merge', array('entity' => $entity), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'contains', array('entity' => $entity), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getEventManager', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getConfiguration', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'isOpen', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getUnitOfWork', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getProxyFactory', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'initializeObject', array('obj' => $obj), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'getFilters', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'isFiltersStateClean', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'hasFilters', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return $this->valueHolder6505a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer55dce = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6505a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6505a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6505a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, '__get', ['name' => $name], $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        if (isset(self::$publicProperties89907[$name])) {
            return $this->valueHolder6505a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6505a;

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

        $targetObject = $this->valueHolder6505a;
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
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6505a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6505a;
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
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, '__isset', array('name' => $name), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6505a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6505a;
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
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, '__unset', array('name' => $name), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6505a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6505a;
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
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, '__clone', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        $this->valueHolder6505a = clone $this->valueHolder6505a;
    }

    public function __sleep()
    {
        $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, '__sleep', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;

        return array('valueHolder6505a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55dce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55dce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55dce && ($this->initializer55dce->__invoke($valueHolder6505a, $this, 'initializeProxy', array(), $this->initializer55dce) || 1) && $this->valueHolder6505a = $valueHolder6505a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6505a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6505a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
