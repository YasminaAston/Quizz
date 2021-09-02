<?php

namespace ContainerFKTlVEQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8a880 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfa735 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2be08 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getConnection', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getMetadataFactory', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getExpressionBuilder', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'beginTransaction', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getCache', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'transactional', array('func' => $func), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->transactional($func);
    }

    public function commit()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'commit', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->commit();
    }

    public function rollback()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'rollback', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getClassMetadata', array('className' => $className), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'createQuery', array('dql' => $dql), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'createNamedQuery', array('name' => $name), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'createQueryBuilder', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'flush', array('entity' => $entity), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'clear', array('entityName' => $entityName), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->clear($entityName);
    }

    public function close()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'close', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->close();
    }

    public function persist($entity)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'persist', array('entity' => $entity), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'remove', array('entity' => $entity), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'refresh', array('entity' => $entity), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'detach', array('entity' => $entity), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'merge', array('entity' => $entity), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'contains', array('entity' => $entity), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getEventManager', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getConfiguration', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'isOpen', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getUnitOfWork', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getProxyFactory', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'initializeObject', array('obj' => $obj), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'getFilters', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'isFiltersStateClean', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'hasFilters', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return $this->valueHolder8a880->hasFilters();
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

        $instance->initializerfa735 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8a880) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8a880 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8a880->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, '__get', ['name' => $name], $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        if (isset(self::$publicProperties2be08[$name])) {
            return $this->valueHolder8a880->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a880;

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

        $targetObject = $this->valueHolder8a880;
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
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a880;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8a880;
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
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, '__isset', array('name' => $name), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a880;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8a880;
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
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, '__unset', array('name' => $name), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a880;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8a880;
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
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, '__clone', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        $this->valueHolder8a880 = clone $this->valueHolder8a880;
    }

    public function __sleep()
    {
        $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, '__sleep', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;

        return array('valueHolder8a880');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfa735 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfa735;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfa735 && ($this->initializerfa735->__invoke($valueHolder8a880, $this, 'initializeProxy', array(), $this->initializerfa735) || 1) && $this->valueHolder8a880 = $valueHolder8a880;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8a880;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8a880;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
