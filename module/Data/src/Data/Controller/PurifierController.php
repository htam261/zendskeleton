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
    /** cho phép tất cả các biến */
    public function Index02Action() {
        echo __METHOD__;
        $config =  \HTMLPurifier_Config::createDefault();
        /** cho phép tất cả các class của thẻ HTML */
        $config->set('Attr.AllowedClasses', null);
        $input = '<h3 class="a">Hello</h3>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo $output;
        return false;
    }
    /** cho phép tất cả các biến */
    public function Index03Action() {
        echo __METHOD__;
        $config =  \HTMLPurifier_Config::createDefault();
        /** cho phép tất cả các class của thẻ HTML */
        // $config->set('Attr.EnableID', true);
        
        /** Cấm một số ID mà không muốn cho phép sử dụng */
//        $config->set('Attr.EnableID', true);
//        $config->set('Attr.IDBlacklist', array('content'));
        
        /** Namespacing IDs: Bổ sung namespace (prefix) cho ID */
        $config->set('Attr.EnableID', true);
        $config->set('Attr.IDPrefix', 'user_');
        $input = '<h3 id="abc">Hello <p id="content"></p></h3>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo $output;
        return false;
    }
    /** Thiết lập thẻ alt mặc định */
    public function Index04Action() {
        echo __METHOD__;
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('Attr.EnableID', true);
        $config->set('Attr.DefaultImageAlt', 'default_alt');
        $input = '<img src="asda.png"/>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo $output;
        return false;
    }
    /** Hiển thị URL của thẻ a */
    public function Index05Action() {
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('Attr.EnableID', true);
        $config->set('AutoFormat.DisplayLinkURI', true);
        $input = '<a href="www.zend.vn">zend</a>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo 'Output: '.$output;
        return false;
    }
    /** Remove các thẻ a trống */
    public function Index06Action() {
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('Attr.EnableID', true);
        $config->set('AutoFormat.RemoveEmpty', false);
        $input = '<div><a href="www.zend.vn"></a></div>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo 'Output: '.$output;
        return false;
    }
    /** HTML allow */
    public function Index07Action() {
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('Attr.EnableID', true);
        //$config->set('HTML.Allowed', null);/** cho phép tất cả các thẻ HTML */
        $config->set('HTML.Allowed', 'div');/** chỉ cho phép thẻ div */
        $config->set('HTML.Allowed', 'div,span');/** chỉ cho phép thẻ div,span */
        $input = '<span>Span Tag</span>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo 'Output: '.$output;
        return false;
    }
    /** HTML allow */
    public function Index08Action() {
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', 'div,span,h3');
        $config->set('HTML.AllowedAttributes', 'style');
        //$config->set('HTML.Allowed', null);/** cho phép tất cả các thẻ HTML */
        $config->set('HTML.Allowed', 'div,h3');/** chỉ cho phép thẻ div,h3 */
        $config->set('CSS.AllowImportant', true);/** cho phép thuộc tính !important */
        $input = '<h3 style="color:red!important;">Span Tag</h3>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo 'Output: '.$output;
        return false;
    }
    /** HTML allowedAttributes */
    public function Index09Action() {
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', 'div,span,h3');
        $config->set('HTML.AllowedAttributes', 'style, class, id');
        /** không chứa các id */
        $input = '<h3 style="color:red!important;" class="abc" id="abc">Span Tag</h3>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo 'Output: '.$output;
        return false;
    }
    /** OutputSortAttr */
    public function Index10Action() {
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('HTML.EnableID', true);
        $config->set('Output.SortAttr', true);
        /** không chứa các id */
        $input = '<h3 style="color:red!important;" class="abc" id="abc">Span Tag</h3>';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo 'Output: '.$output;
        return false;
    }
    /** OutputSortAttr */
    public function Index11Action() {
        $config =  \HTMLPurifier_Config::createDefault();
        $config->set('HTML.EnableID', true);
        $config->set('Output.SortAttr', true);
        /** không chứa các id */
        $input = '<h3>Span Tag';
        $purifier = new \HTMLPurifier_HTMLPurifier($config);
        $output = $purifier->purify($input);
        echo 'Output: '.$output;
        return false;
    }
    
    public function Index12Action() {
        $input = '<a href="&#106;&#107;&#108;&#108;&#97;&#115;">adasdas';
        $config = array(
            array('Attr.EnableID', true),
            array('Output.SortAttr', true),
        );
//        $filter = new \ZendVN\Filter\Purifier($config);
//        $output = $filter->filter($input);
        $output = \Zend\Filter\StaticFilter::execute($input, 'Purifier', $config);
        echo 'Output: '.$output;
        return false;
    }
}
