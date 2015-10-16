<?php
namespace ZendVN\Filter;

class CreateURL implements \Zend\Filter\FilterInterface {
    
    public function __construct() {
        
    }
    
    public function filter($value) {
        /** cach 01 */
//        $filterChain = new \Zend\Filter\FilterChain();
//        $filterChain
//                ->attach(new \Zend\I18n\Filter\Alnum(true))
//                ->attach(new \Zend\Filter\StringTrim())
//                ->attach(new \Zend\Filter\PregReplace(array(
//                    'pattern' => '#\s+#',
//                    'replacement' => ' '
//                )))
//                ->attach(new \ZendVN\Filter\RemoveCircumflex())
//                ->attach(new \Zend\Filter\StringToLower())
//                ->attach(new \Zend\Filter\Word\SeparatorToDash())
//                ;
//                return $filterChain->filter($value);
        $output = \Zend\Filter\StaticFilter::execute($value, 'alnum');
        
        return $output;
    }
}

