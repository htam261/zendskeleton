<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Route\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class RouteController extends AbstractActionController
{
    public function indexAction()
    {
    	echo '<h3 style="color:red; font-weight:bold;">'.__METHOD__.'</h3>';
    }
}