<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';

$a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$a->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener()) && false ?: '_'});

return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array())) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => array(), 'serverVersion' => '5.7', 'defaultTableOptions' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci')), new \Doctrine\DBAL\Configuration(), $a, array());
