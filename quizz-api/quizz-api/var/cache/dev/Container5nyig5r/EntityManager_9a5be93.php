<?php

namespace Container5nyig5r;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder613ba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4ab26 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15cba = [
        
    ];

    public function getConnection()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getConnection', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getMetadataFactory', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getExpressionBuilder', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'beginTransaction', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getCache', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'transactional', array('func' => $func), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->transactional($func);
    }

    public function commit()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'commit', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->commit();
    }

    public function rollback()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'rollback', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getClassMetadata', array('className' => $className), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'createQuery', array('dql' => $dql), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'createNamedQuery', array('name' => $name), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'createQueryBuilder', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'flush', array('entity' => $entity), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'clear', array('entityName' => $entityName), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->clear($entityName);
    }

    public function close()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'close', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->close();
    }

    public function persist($entity)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'persist', array('entity' => $entity), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'remove', array('entity' => $entity), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'refresh', array('entity' => $entity), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'detach', array('entity' => $entity), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'merge', array('entity' => $entity), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'contains', array('entity' => $entity), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getEventManager', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getConfiguration', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'isOpen', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getUnitOfWork', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getProxyFactory', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'initializeObject', array('obj' => $obj), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'getFilters', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'isFiltersStateClean', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'hasFilters', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return $this->valueHolder613ba->hasFilters();
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

        $instance->initializer4ab26 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder613ba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder613ba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder613ba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, '__get', ['name' => $name], $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        if (isset(self::$publicProperties15cba[$name])) {
            return $this->valueHolder613ba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder613ba;

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

        $targetObject = $this->valueHolder613ba;
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
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder613ba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder613ba;
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
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, '__isset', array('name' => $name), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder613ba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder613ba;
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
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, '__unset', array('name' => $name), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder613ba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder613ba;
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
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, '__clone', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        $this->valueHolder613ba = clone $this->valueHolder613ba;
    }

    public function __sleep()
    {
        $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, '__sleep', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;

        return array('valueHolder613ba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4ab26 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4ab26;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4ab26 && ($this->initializer4ab26->__invoke($valueHolder613ba, $this, 'initializeProxy', array(), $this->initializer4ab26) || 1) && $this->valueHolder613ba = $valueHolder613ba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder613ba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder613ba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
