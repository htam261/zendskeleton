<?php
namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ServiceController extends AbstractActionController {
    public function index01Action() {
        echo __METHOD__;
        return $this->response;
    }
}