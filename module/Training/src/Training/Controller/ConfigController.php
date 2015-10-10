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
}