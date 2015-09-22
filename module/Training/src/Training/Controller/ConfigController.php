<?php
namespace Training\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ConfigController extends AbstractActionController {
    public function indexAction() {
        echo '<h1>abcsadas</h1>';
        $configAray = array(
            'website' => 'www.zend.vn',
            'account' => array(
                'email' => 'zend2@zend.vn',
                'password' => '123456',
                'title' => 'Zend Config',
                'content' => 'Training Zend Config',
                'port' => 465
            )
        );
        $config = new \Zend\Config\Config($configAray);
        echo "<pre>";
        print_r($config);
        echo "</pre>";
        
        return false;
    }
}