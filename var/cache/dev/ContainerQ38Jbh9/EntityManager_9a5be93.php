<?php

namespace ContainerQ38Jbh9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4183f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9130b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a910 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getConnection', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getMetadataFactory', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getExpressionBuilder', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'beginTransaction', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getCache', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'transactional', array('func' => $func), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->transactional($func);
    }

    public function commit()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'commit', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->commit();
    }

    public function rollback()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'rollback', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getClassMetadata', array('className' => $className), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'createQuery', array('dql' => $dql), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'createNamedQuery', array('name' => $name), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'createQueryBuilder', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'flush', array('entity' => $entity), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'clear', array('entityName' => $entityName), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->clear($entityName);
    }

    public function close()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'close', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->close();
    }

    public function persist($entity)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'persist', array('entity' => $entity), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'remove', array('entity' => $entity), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'refresh', array('entity' => $entity), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'detach', array('entity' => $entity), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'merge', array('entity' => $entity), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'contains', array('entity' => $entity), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getEventManager', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getConfiguration', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'isOpen', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getUnitOfWork', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getProxyFactory', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'initializeObject', array('obj' => $obj), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'getFilters', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'isFiltersStateClean', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'hasFilters', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return $this->valueHolder4183f->hasFilters();
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

        $instance->initializer9130b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4183f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4183f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4183f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, '__get', ['name' => $name], $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        if (isset(self::$publicProperties8a910[$name])) {
            return $this->valueHolder4183f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4183f;

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

        $targetObject = $this->valueHolder4183f;
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
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4183f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4183f;
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
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, '__isset', array('name' => $name), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4183f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4183f;
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
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, '__unset', array('name' => $name), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4183f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4183f;
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
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, '__clone', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        $this->valueHolder4183f = clone $this->valueHolder4183f;
    }

    public function __sleep()
    {
        $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, '__sleep', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;

        return array('valueHolder4183f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9130b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9130b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9130b && ($this->initializer9130b->__invoke($valueHolder4183f, $this, 'initializeProxy', array(), $this->initializer9130b) || 1) && $this->valueHolder4183f = $valueHolder4183f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4183f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4183f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
