<?php

require_once 'ConfigSingle.php';

$config = ConfigSingle::getInstance();

$config->setUrl('https://www.yahoo.com');
echo $config->getUrl() . PHP_EOL; //'https://www.yahoo.com'

$newTestConfig = ConfigSingle::getInstance();
echo $config->getUrl(); //Same as previous - 'https://www.yahoo.com'

//$newTestConfig1 = new ConfigSingle(); //Error
//$newTestConfig2 = clone $config; // Error
