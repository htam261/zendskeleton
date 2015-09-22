<?php
namespace Training\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController {
    public function indexAction() {
        echo '<h1>abcsadas</h1>';
        $response = $this->getResponse();
        return $this->response;
    }
}