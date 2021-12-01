<?php

namespace ContainerTmTUylx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3638b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeref022 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2672d = [
        
    ];

    public function getConnection()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getConnection', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getMetadataFactory', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getExpressionBuilder', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'beginTransaction', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getCache', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getCache();
    }

    public function transactional($func)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'transactional', array('func' => $func), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'wrapInTransaction', array('func' => $func), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'commit', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->commit();
    }

    public function rollback()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'rollback', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getClassMetadata', array('className' => $className), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'createQuery', array('dql' => $dql), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'createNamedQuery', array('name' => $name), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'createQueryBuilder', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'flush', array('entity' => $entity), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'clear', array('entityName' => $entityName), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->clear($entityName);
    }

    public function close()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'close', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->close();
    }

    public function persist($entity)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'persist', array('entity' => $entity), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'remove', array('entity' => $entity), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'refresh', array('entity' => $entity), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'detach', array('entity' => $entity), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'merge', array('entity' => $entity), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getRepository', array('entityName' => $entityName), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'contains', array('entity' => $entity), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getEventManager', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getConfiguration', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'isOpen', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getUnitOfWork', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getProxyFactory', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'initializeObject', array('obj' => $obj), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'getFilters', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'isFiltersStateClean', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'hasFilters', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return $this->valueHolder3638b->hasFilters();
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

        $instance->initializeref022 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3638b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3638b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3638b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, '__get', ['name' => $name], $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        if (isset(self::$publicProperties2672d[$name])) {
            return $this->valueHolder3638b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3638b;

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

        $targetObject = $this->valueHolder3638b;
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
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3638b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3638b;
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
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, '__isset', array('name' => $name), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3638b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3638b;
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
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, '__unset', array('name' => $name), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3638b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3638b;
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
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, '__clone', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        $this->valueHolder3638b = clone $this->valueHolder3638b;
    }

    public function __sleep()
    {
        $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, '__sleep', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;

        return array('valueHolder3638b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeref022 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeref022;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeref022 && ($this->initializeref022->__invoke($valueHolder3638b, $this, 'initializeProxy', array(), $this->initializeref022) || 1) && $this->valueHolder3638b = $valueHolder3638b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3638b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3638b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
