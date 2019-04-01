<?php

require_once 'ConfigSingle.php';

$config = ConfigSingle::getInstance();

$config->setUrl('https://www.yahoo.com');
echo $config->getUrl();

$newTestConfig = ConfigSingle::getInstance();
echo $config->getUrl(); //Same as previous

//$newTestConfig1 = new ConfigSingle(); //Error
//$newTestConfig2 = clone $config; // Error
