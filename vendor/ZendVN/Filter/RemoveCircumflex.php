<?php
namespace ZendVN\Filter;

class RemoveCircumflex implements \Zend\Filter\FilterInterface {
    public function __construct() {}
    
    public function filter($value) {
        $characterA       = '#(á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ)#imsU';
        $replacementCharacterA   = 'a';
        $value          = preg_replace($characterA, $replacementCharacterA, $value);
        
        $characterD       = '#(đ|Đ)#imsU';
        $replacementCharacterD  = 'd';
        $value          = preg_replace($characterD, $replacementCharacterD, $value);
        
        $characterE       = '#(é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ)#imsU';
        $replacementCharacterE  = 'e';
        $value          = preg_replace($characterE, $replacementCharacterE, $value);
        
        $characterI       = '#(í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị)#imsU';
        $replacementCharacterI = 'i';
        $value          = preg_replace($characterI, $replacementCharacterI, $value);
        
        $characterO       = '#(ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ)#imsU';
        $replacementCharacterO = 'o';
        $value          = preg_replace($characterO, $replacementCharacterO, $value);
        
        $characterU       = '#(ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự)#imsU';
        $replacementCharacterU = 'u';
        $value          = preg_replace($characterU, $replacementCharacterU, $value);
        
        $characterY       = '#(ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ)#imsU';
        $replacementCharacterY = 'y';
        $value          = preg_replace($characterY, $replacementCharacterY, $value);
        return $value;
    }
}

