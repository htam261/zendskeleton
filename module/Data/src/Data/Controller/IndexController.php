<?php
namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController {
    // \Zend\I18n\Filter\Alnum : trích xuất giá trị chuỗi từ a-z A-Z và các giá trị số
    public function indexAction() {

        return false;
    }
    // \Zend\I18n\Filter\Alnum : trích xuất giá trị chuỗi từ a-z A-Z và các giá trị số
    public function index2Action() {
        $input = 'dasdada';
        $output = (new \Zend\Filter\Callback('strtoupper'))->filter($input);
        echo '<h3 style="color:red">'.$output.'</h3>';
        return false;
    }
    /** Compress*/
    public function index11Action() {
        echo PUBLIC_PATH;
        $options = array(
            'adapter' => 'zip',
            'options' => array('archive' => PUBLIC_PATH.'/tmp/compress.zip')
        );
        $filter = new \Zend\Filter\Compress($options);
        $input = PUBLIC_PATH.'/tmp/fonts';
        $output = $filter->filter($input);
        
        return false;
    }
    /** Decompress */
    public function index12Action() {
        echo PUBLIC_PATH;
        $options = array(
            'adapter' => 'zip',
            'options' => array('target' => PUBLIC_PATH.'/tmp/unzip')
        );
        $filter = new \Zend\Filter\Decompress($options);
        $input = PUBLIC_PATH.'/tmp/compress.zip';
        $output = $filter->filter($input);
        return false;
    }
    /** \Zend\Filter\HTMLEntities() */
    public function index13Action() {
        $filter = new \Zend\Filter\HtmlEntities();
        $input = 'Zend Framework 2 <> "" ? ~';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\PregReplace() */
    public function index14Action() {
        $filter = new \Zend\Filter\PregReplace();
        $input = 'Zend Framework 2 <> 1232132___1312321';
        $filter->setPattern('#[0-9]#');
        $filter->setReplacement('X');
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\CamelCaseToDash() => Thêm dấu gạch trước chữ in hoa*/
    public function index15Action() {
        $filter = new \Zend\Filter\Word\CamelCaseToDash();
        $input = 'ZendFrameworkIsEasy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
     /** \Zend\Filter\CamelCaseToUnderscore() => Thêm dấu gạch dưới trước chữ in hoa*/
    public function index16Action() {
        $filter = new \Zend\Filter\Word\CamelCaseToUnderscore();
        $input = 'ZendFrameworkIsEasy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\CamelCaseToSepareator() => Thêm dấu gạch dưới trước chữ in hoa*/
    public function index17Action() {
        $filter = new \Zend\Filter\Word\CamelCaseToSeparator('++');
        $input = 'ZendFrameworkIsEasy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\DashToUnderscore() => Chuyển dấu gạch ngang thành dấu gạch dưới */
    public function index18Action() {
        $filter = new \Zend\Filter\Word\DashToUnderscore();
        $input = 'Zend-Framework-Is-Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index19Action() {
        $filter = new \Zend\Filter\Word\DashToCamelCase();
        $input = 'Zend-framework-is-Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index20Action() {
        $filter = new \Zend\Filter\Word\DashToSeparator('.');
        $input = 'Zend-framework-is-Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index21Action() {
        $filter = new \Zend\Filter\Word\SeparatorToCamelCase('-');
        $input = 'Zend-framework-is-Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index22Action() {
        $filter = new \Zend\Filter\Word\SeparatorToDash(':');
        $input = 'Zend:framework:is:Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index23Action() {
        $filter = new \Zend\Filter\Word\SeparatorToSeparator(':', '++');
        $input = 'Zend:framework:is-Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index24Action() {
        $filter = new \Zend\Filter\Word\UnderscoreToCamelCase();
        $input = 'Zend_framework_is-Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index25Action() {
        $filter = new \Zend\Filter\Word\UnderscoreToDash();
        $input = 'Zend_framework_is-Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index26Action() {
        $filter = new \Zend\Filter\Word\UnderscoreToSeparator('++++');
        $input = 'Zend_framework_is-Easy';
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
}