<?php
chdir(dirname(__DIR__));

@define('APPLICATION_PATH', realpath(dirname(__DIR__)));
@define('LIBRARY_PATH', APPLICATION_PATH.'/vendor/zend-loader/src/AutoloaderFactory.php'); /** */
@define('PUBLIC_PATH', APPLICATION_PATH.'/public'); /** */
@define('HTMLPURIFIER_PREFIX', APPLICATION_PATH.'/vendor'); /** */

@define('APPLICATION_ENV', (getenv('APPLICATION_ENV')?getenv('APPLICATION_ENV'):'production'));/** production */
@define('APPLICATION_URL', 'http://zendskeleton.com');
@define('PUBLIC_URL', APPLICATION_URL.'/public');
