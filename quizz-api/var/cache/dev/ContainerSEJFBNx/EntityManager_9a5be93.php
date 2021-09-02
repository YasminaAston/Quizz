<?php

namespace ContainerSEJFBNx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54f1c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer543b1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties25c59 = [
        
    ];

    public function getConnection()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getConnection', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getMetadataFactory', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getExpressionBuilder', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'beginTransaction', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getCache', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'transactional', array('func' => $func), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->transactional($func);
    }

    public function commit()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'commit', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->commit();
    }

    public function rollback()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'rollback', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getClassMetadata', array('className' => $className), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'createQuery', array('dql' => $dql), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'createNamedQuery', array('name' => $name), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'createQueryBuilder', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'flush', array('entity' => $entity), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'clear', array('entityName' => $entityName), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->clear($entityName);
    }

    public function close()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'close', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->close();
    }

    public function persist($entity)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'persist', array('entity' => $entity), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'remove', array('entity' => $entity), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'refresh', array('entity' => $entity), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'detach', array('entity' => $entity), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'merge', array('entity' => $entity), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'contains', array('entity' => $entity), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getEventManager', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getConfiguration', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'isOpen', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getUnitOfWork', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getProxyFactory', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'initializeObject', array('obj' => $obj), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'getFilters', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'isFiltersStateClean', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'hasFilters', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return $this->valueHolder54f1c->hasFilters();
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

        $instance->initializer543b1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54f1c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54f1c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54f1c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, '__get', ['name' => $name], $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        if (isset(self::$publicProperties25c59[$name])) {
            return $this->valueHolder54f1c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54f1c;

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

        $targetObject = $this->valueHolder54f1c;
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
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54f1c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54f1c;
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
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, '__isset', array('name' => $name), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54f1c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54f1c;
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
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, '__unset', array('name' => $name), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54f1c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54f1c;
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
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, '__clone', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        $this->valueHolder54f1c = clone $this->valueHolder54f1c;
    }

    public function __sleep()
    {
        $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, '__sleep', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;

        return array('valueHolder54f1c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer543b1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer543b1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer543b1 && ($this->initializer543b1->__invoke($valueHolder54f1c, $this, 'initializeProxy', array(), $this->initializer543b1) || 1) && $this->valueHolder54f1c = $valueHolder54f1c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54f1c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54f1c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
