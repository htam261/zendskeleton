<?php
namespace ZendVN\Filter;

class AddLink implements \Zend\Filter\FilterInterface {
    
    protected $options = array(
        'word' => null,
        'link' => null
    );
    /** phuong thuc khoi tao  */
    public function __construct($options) {
        $this->options['word'] = $options['word'];
        $this->options['link'] = $options['link'];
    }
    
    public function filter($value) {
        $pattern = '#'.$this->options['word'].'#imsU';
        $replacement = '<a href="'.$this->options['link'].'">'.$this->options['word'].'</a>';
        return preg_replace($pattern, $replacement, $value);
    }
}
