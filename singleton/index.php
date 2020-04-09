<?php

require_once '../autoloader.php';

use Singleton\LogsSingleton;

$instance = LogsSingleton::getInstance();
$newInstance = LogsSingleton::getInstance();

if ($instance == $newInstance) {
    echo 'Mesma instância !!';
}