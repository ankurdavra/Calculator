<?php

namespace ContainerHUcQBcg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0a039 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer71a9e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties472b5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getConnection', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getMetadataFactory', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getExpressionBuilder', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'beginTransaction', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getCache', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getCache();
    }

    public function transactional($func)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'transactional', array('func' => $func), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->transactional($func);
    }

    public function commit()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'commit', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->commit();
    }

    public function rollback()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'rollback', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getClassMetadata', array('className' => $className), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'createQuery', array('dql' => $dql), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'createNamedQuery', array('name' => $name), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'createQueryBuilder', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'flush', array('entity' => $entity), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'clear', array('entityName' => $entityName), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->clear($entityName);
    }

    public function close()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'close', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->close();
    }

    public function persist($entity)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'persist', array('entity' => $entity), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'remove', array('entity' => $entity), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'refresh', array('entity' => $entity), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'detach', array('entity' => $entity), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'merge', array('entity' => $entity), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getRepository', array('entityName' => $entityName), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'contains', array('entity' => $entity), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getEventManager', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getConfiguration', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'isOpen', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getUnitOfWork', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getProxyFactory', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'initializeObject', array('obj' => $obj), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'getFilters', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'isFiltersStateClean', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'hasFilters', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return $this->valueHolder0a039->hasFilters();
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

        $instance->initializer71a9e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0a039) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0a039 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0a039->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, '__get', ['name' => $name], $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        if (isset(self::$publicProperties472b5[$name])) {
            return $this->valueHolder0a039->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a039;

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

        $targetObject = $this->valueHolder0a039;
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
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a039;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0a039;
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
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, '__isset', array('name' => $name), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a039;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0a039;
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
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, '__unset', array('name' => $name), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a039;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0a039;
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
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, '__clone', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        $this->valueHolder0a039 = clone $this->valueHolder0a039;
    }

    public function __sleep()
    {
        $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, '__sleep', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;

        return array('valueHolder0a039');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer71a9e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer71a9e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer71a9e && ($this->initializer71a9e->__invoke($valueHolder0a039, $this, 'initializeProxy', array(), $this->initializer71a9e) || 1) && $this->valueHolder0a039 = $valueHolder0a039;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0a039;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0a039;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
