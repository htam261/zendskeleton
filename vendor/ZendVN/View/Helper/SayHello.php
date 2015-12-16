<?php
namespace ZendVN\View\Helper;

use Zend\View\Helper\AbstractHelper;

class SayHello  extends AbstractHelper {
	public function __invoke($name)
    {
		$escapse = $this->getView()->plugin('escapehtml');
        echo $escapse($name);
	}
}