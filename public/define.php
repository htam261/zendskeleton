<?php
chdir(dirname(__DIR__));

define('APPLICATION_PATH', realpath(dirname(__DIR__)));
define('LIBRARY_PATH', APPLICATION_PATH.'/vendor/zend-loader/src/AutoloaderFactory.php'); /** */