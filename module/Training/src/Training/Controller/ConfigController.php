<?php
namespace Training\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ConfigController extends AbstractActionController {
    public function indexAction() {
        $reader = new \Zend\Config\Reader\Ini();
        $reader->setNestSeparator('.');/** default: '.' */
        $configArray = $reader->fromFile(__DIR__.'/config/ini/module.config.ini');
        $configArray['view_manager']['template_path_stack'][] =  __DIR__.'/../view';
        return $configArray;
    }
    
    public function index3Action() {
        $reader = new \Zend\Config\Reader\Xml();
        $data = $reader->fromFile(__DIR__.'/../../../config/xml/module.config.xml');
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        /** ghi vao file xml */
        $config                             = new \Zend\Config\Config(array(), true);
        $config->production                 = array();
        $config->production->website        = 'zend.vn';
        $config->production->account        = array();
        $config->production->account->email = 'htam261@gmail.com';
        $config->production->account->port  = 465;
        $writer = new \Zend\Config\Writer\Xml();
        $writer->toFile(__DIR__.'/../../../config/xml/config.xml',$config);
        
        return false;
    }
}