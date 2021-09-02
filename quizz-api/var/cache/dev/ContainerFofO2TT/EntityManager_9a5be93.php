<?php

namespace ContainerFofO2TT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5272b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer41a11 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties90bc2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getConnection', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getMetadataFactory', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getExpressionBuilder', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'beginTransaction', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getCache', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'transactional', array('func' => $func), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->transactional($func);
    }

    public function commit()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'commit', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->commit();
    }

    public function rollback()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'rollback', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getClassMetadata', array('className' => $className), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'createQuery', array('dql' => $dql), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'createNamedQuery', array('name' => $name), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'createQueryBuilder', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'flush', array('entity' => $entity), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'clear', array('entityName' => $entityName), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->clear($entityName);
    }

    public function close()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'close', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->close();
    }

    public function persist($entity)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'persist', array('entity' => $entity), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'remove', array('entity' => $entity), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'refresh', array('entity' => $entity), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'detach', array('entity' => $entity), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'merge', array('entity' => $entity), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'contains', array('entity' => $entity), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getEventManager', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getConfiguration', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'isOpen', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getUnitOfWork', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getProxyFactory', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'initializeObject', array('obj' => $obj), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'getFilters', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'isFiltersStateClean', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'hasFilters', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return $this->valueHolder5272b->hasFilters();
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

        $instance->initializer41a11 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5272b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5272b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5272b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, '__get', ['name' => $name], $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        if (isset(self::$publicProperties90bc2[$name])) {
            return $this->valueHolder5272b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5272b;

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

        $targetObject = $this->valueHolder5272b;
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
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5272b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5272b;
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
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, '__isset', array('name' => $name), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5272b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5272b;
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
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, '__unset', array('name' => $name), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5272b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5272b;
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
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, '__clone', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        $this->valueHolder5272b = clone $this->valueHolder5272b;
    }

    public function __sleep()
    {
        $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, '__sleep', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;

        return array('valueHolder5272b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer41a11 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer41a11;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer41a11 && ($this->initializer41a11->__invoke($valueHolder5272b, $this, 'initializeProxy', array(), $this->initializer41a11) || 1) && $this->valueHolder5272b = $valueHolder5272b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5272b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5272b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
