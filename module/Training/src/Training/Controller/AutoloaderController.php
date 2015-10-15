<?php
namespace Training\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class AutoloaderController extends AbstractActionController {
    public function indexAction() {
        /*$autloader = new \Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));*/
        $autloader = new \Zend\Loader\StandardAutoloader(array(
            'autoregister_zf' => true,
            'namespaces' => array(
                'Database' => LIBRARY_PATH.'/../../../Database',
            ),
            'prefixes' => array(
                'Mail'=> LIBRARY_PATH.'/../../../Mail'
            )
            ));
//        $autloader->registerNamespace('Database', LIBRARY_PATH.'/../../../Database');
//        $autloader->registerPrefix('Mail', LIBRARY_PATH.'/../../../Mail');
        $autloader->register();
        $student = new \Database\Student();
        $teacher = new \Database\Teacher();
        $worker = new \Database\Oracle\Worker();
        $sender = new \Mail_Sender();/** zf 1.x*/
        $a_mail = new \Mail_Abc_A();
        return false;
    }
    
    public function index2Action() {
        \Zend\Loader\AutoloaderFactory::factory(array(
            'Zend\Loader\StandardAutoLoader' => array(
                'autoloader_zf' => true,
                'namespaces' => array(
                    'Database' => LIBRARY_PATH.'/../../../Database',
                    'File\Abc' => LIBRARY_PATH.'/../../../File'
                ),
                'prefixes' => array(
                    'Mail' => LIBRARY_PATH.'/../../../Mail'
                )
            )
        ));
        $student = new \Database\Student();
        $teacher = new \Database\Teacher();
        $worker = new \Database\Oracle\Worker();
        $sender = new \Mail_Sender();/** zf 1.x*/
        $a_mail = new \Mail_Abc_A();
        return false;
        
    }
    public function index4Action() {
        echo __METHOD__;
        
        $autoloader = new \Zend\Loader\ClassMapAutoloader();
        $autoloader->registerAutoloadMap(LIBRARY_PATH.'/../../../Autoloader/Autoloader.php');
        $autoloader->register();
        
        $student = new \Database\Student();
        $teacher = new \Database\Teacher();
        $worker = new \Database\Oracle\Worker();
        
        return false;
    }
    
    public function index5Action() {
        $autoloader = new \Zend\Loader\ClassMapAutoloader(array(
            LIBRARY_PATH.'/../../../Autoloader/Autoloader.php',
            LIBRARY_PATH.'/../../../Autoloader/classmap.php'
        ));
        $autoloader->register();
        
        $student = new \Database\Student();
        $teacher = new \Database\Teacher();
        $worker = new \Database\Oracle\Worker();
        $upload = new \File\Abc\Upload();
        return false;
    }
    public function index6Action() {
        \Zend\Loader\AutoloaderFactory::factory(array(
            'Zend\Loader\ClassMapAutoloader' =>
            array(
                LIBRARY_PATH.'/../../../Autoloader/Autoloader.php',
                LIBRARY_PATH.'/../../../Autoloader/classmap.php'
            ),
            'Zend\Loader\StandardAutoLoader' => array(
                'autoloader_zf' => true,
                'namespaces' => array(
                    'Database' => LIBRARY_PATH.'/../../../Database',
                    'File\Abc' => LIBRARY_PATH.'/../../../File'
                ),
                'prefixes' => array(
                    'Mail' => LIBRARY_PATH.'/../../../Mail'
                )
            )
        ));
        
        $student = new \Database\Student();
        $teacher = new \Database\Teacher();
        $worker = new \Database\Oracle\Worker();
        $upload = new \File\Abc\Upload();
        return false;
    }
    
    public function index7Action() {
        \Zend\Loader\AutoloaderFactory::factory(array(
            'Zend\Loader\ClassMapAutoloader' =>
            array(
                LIBRARY_PATH.'/../../../Autoloader/Autoloader.php',
                LIBRARY_PATH.'/../../../Autoloader/classmap.php'
            )
        ));
        
        $student = new \Database\Student();
        $teacher = new \Database\Teacher();
        $worker = new \Database\Oracle\Worker();
        $upload = new \File\Abc\Upload();
        return false;
    }
}