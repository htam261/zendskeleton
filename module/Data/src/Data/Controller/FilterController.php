<?php
namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class FilterController extends AbstractActionController {
    // \Zend\I18n\Filter\Alnum : trích xuất giá trị chuỗi từ a-z A-Z và các giá trị số
    public function indexAction() {
        echo ''.__METHOD__;
        $filter = new \Zend\I18n\Filter\Alnum();
        $input = 'ab !@#$^*( dec 12 ()*() 12';
        $output = $filter->filter($input);
        echo '<h3 style="color:red;font-weight:bold;">\Zend\I18n\Filter\Alnum</h3>';
        echo '<h3 style="color:red;font-weight:bold;">'.$input.'</h3>';
        echo '<h3 style="color:red;font-weight:bold;">'.$output.'</h3>';
        
        return false;
    }
    // \Zend\I18n\Filter\Alnum : trích xuất giá trị chuỗi từ a-z A-Z và các giá trị số
    public function index2Action() {
        $filter = new \Zend\I18n\Filter\Alnum();
        echo $filter->filter("This is (my) content: 123");
        
        return false;
    }
    
  
}