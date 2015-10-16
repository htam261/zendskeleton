<?php
namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class SerializerController extends AbstractActionController {
    
    public function Index01Action() {
        echo __METHOD__;
        
        $array = array(
            'invokables' => array(
                'Training\Controller\Index'         => 'Training\Controller\IndexController',
                'Training\Controller\Config'        => 'Training\Controller\ConfigController',
                'Training\Controller\Autoloader'    => 'Training\Controller\AutoloaderController',
                'Training\Controller\Filter'        => 'Training\Controller\FilterController',
            ),
        );
        
        $serializer = new \Zend\Serializer\Adapter\PhpSerialize();
        $str = $serializer->serialize($array);
        $str2 = serialize($array);
        echo $str;
//        $obj = $serializer->unserialize($str);
        $s = unserialize($str2);
//        echo "<pre>";
//        print_r($obj);
//        echo "</pre>";
        return false;
    }
    public function Index02Action() {
        
        $array = array(
            'invokables' => array(
                'Training\Controller\Index'         => 'Training\Controller\IndexController',
                'Training\Controller\Config'        => 'Training\Controller\ConfigController',
                'Training\Controller\Autoloader'    => 'Training\Controller\AutoloaderController',
                'Training\Controller\Filter'        => 'Training\Controller\FilterController',
            ),
        );
        
        $serializer = new \Zend\Serializer\Adapter\PhpCode();
        $str = $serializer->serialize($array);
        echo $str;
        return false;
    }
}

