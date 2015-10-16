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
    
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index27Action() {
//        $input = 'Zend_framework_is-Easy';
//        $output = \Zend\Filter\StaticFilter::execute($input, 'Word\UnderscoreToSeparator');
        
        /** PregReplace */
        $input = 'abc 12 def 3';
        $output = \Zend\Filter\StaticFilter::execute($input, 'PregReplace', array(
            'pattern' => '#[0-9]#',
            'replacement' => 'X'
        ));
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    
    /** \Zend\Filter\DashToCamelCase() =>  */
    public function index28Action() {
        $input = '   zend_framework_is_not_difficult  ';
        $filterChain = new \Zend\Filter\FilterChain();
        $filterChain    ->attach(new \Zend\Filter\StringToUpper())
                        ->attach(new \Zend\Filter\StringTrim())
                        ->attach(new \Zend\Filter\Word\UnderscoreToDash());
        $output = $filterChain->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    
    public function index29Action() {
        $input = '   zend_framework_is_not_difficult  ';
        $filterChain = new \Zend\Filter\FilterChain();
        $filterChain->attachByName('StringToUpper')
                ->attachByName('StringTrim')
                ->attachByName('Word\UnderscoreToDash');
        $output = $filterChain->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    
    /** Tìm từ khóa và thêm đường link vào từ khóa đó */
    public function index30Action() {
        $input = 'Khóa học Zend abc Zend ansda Zend Zend';
        $options = array(
            'word' => 'Zend',
            'link' => 'http://www.zend.vn'
        );
        $filter = new \ZendVN\Filter\AddLink($options);
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    
    /** chuyển 1 chuổi có dấu thành chuỗi không dấu */
    public function index31Action() {
        $input = 'Khóa học lập trình Zend Framework cung cấp những kiến thức cơ bản và chuyên sâu về Zend Framework đi';
        $options = array(
            'word' => 'Zend Framework',
            'link' => 'http://www.zend.vn'
        );
        $filter = new \ZendVN\Filter\RemoveCircumflex();
        $output = $filter->filter($input);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$output."</h3>";
        return false;
    }
    
    public function index32Action() {
        $input = 'http://www.zend.vn/Khóa học lập trình Zend Framework !@#$%^&*()_+ cung cấp những kiển thức căn bản và chuyên sâu về Zend Framework';
        // http://www.zend.vn/khoa-hoc-lap-trinh-zend-framework-cng-cap-nhung-kien-thuc-can-ban-va-chuyen-sau-ve-zend-framework.html
        
        $newArr = explode('.vn/', $input);
        $filter = new \ZendVN\Filter\CreateURL();
        $output = $filter->filter($newArr[1]);
        echo "<h3>".$input."</h3>";
        echo "<h3>".$newArr[0].'vn/'.$output."</h3>";
        return false;
    }
    
    public function index33Action() {
        $input = 'http://www.zend.vn/Khóa học lập trình Zend Framework !@#$%^&*()_+ cung cấp những kiển thức căn bản và chuyên sâu về Zend Framework';
        // http://www.zend.vn/khoa-hoc-lap-trinh-zend-framework-cng-cap-nhung-kien-thuc-can-ban-va-chuyen-sau-ve-zend-framework.html
        
        $newArr = explode('.vn/', $input);
//        echo '<pre>';
//        print_r(\Zend\Filter\StaticFilter::getPluginManager());
//        echo '</pre>';
        
        \Zend\Filter\StaticFilter::getPluginManager()->setInvokableClass('CreateURL', '\ZendVN\Filter\CreateURL');
        $output = \Zend\Filter\StaticFilter::execute($newArr[1], 'CreateURL'); 
        echo "<h3>".$input."</h3>";
        echo "<h3>".$newArr[0].'vn/'.$output."</h3>";
        return false;
    }
    
    public function index34Action() {
        $input = 'http://www.zend.vn/Khóa học lập trình Zend Framework !@#$%^&*()_+ cung cấp những kiển thức căn bản và chuyên sâu về Zend Framework';
        // http://www.zend.vn/khoa-hoc-lap-trinh-zend-framework-cng-cap-nhung-kien-thuc-can-ban-va-chuyen-sau-ve-zend-framework.html
        
        $newArr = explode('.vn/', $input);
        $output = \Zend\Filter\StaticFilter::execute($newArr[1], 'CreateURL'); 
        echo "<h3>".$input."</h3>";
        echo "<h3>".$newArr[0].'vn/'.$output."</h3>";
        return false;
    }
}