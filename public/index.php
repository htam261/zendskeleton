<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
include 'define.php';

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}

// Setup autoloading
require 'init_autoloader.php';
/** Options autoloader*/
 require 'define.php';
 //include LIBRARY_PATH . '/../../../Zend/Loader/AutoloaderFactory.php';
 @include LIBRARY_PATH;
 Zend\Loader\AutoloaderFactory::factory(array(
     'Zend\Loader\StandardAutoloader' => array(
         'autoregister_zf' => true,
         'namespaces' => array(
             'ZendVN' => LIBRARY_PATH.'/../../../ZendVN',
             
         ),
         'prefixes' => array(
             'HTMLPurifier' => LIBRARY_PATH.'/../../../HTMLPurifier'
         )
     )
 ));


// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();

/** init_autoloader.php */
/** vendor/autoloader.php */