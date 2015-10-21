<?php
namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController {
    // \Zend\I18n\Filter\Alnum : trích xuất giá trị chuỗi từ a-z A-Z và các giá trị số
    public function indexAction() {
        echo __METHOD__;
        return false;
    }
}