<?php
namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Escaper\Escaper as Escape;

class PurifierController extends AbstractActionController {
    public function Index01Action() {
        echo __METHOD__;
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('HTML.AllowedElements', 'div,p');
        $input = '<h3>Hello</h3>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo $output;
        return false;
    }
}
