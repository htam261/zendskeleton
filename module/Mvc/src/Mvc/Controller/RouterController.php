<?php
namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class RouterController extends AbstractActionController {
    // \Zend\I18n\Filter\Alnum : trích xuất giá trị chuỗi từ a-z A-Z và các giá trị số
    public function indexAction() {
        echo '<h3 style="color:red; font-weight:bold;">'.__METHOD__.'</h3>';
//         $controller_name = $this->params('controller');
//         echo $controller_name;

//         $action_name = $this->params('action');
//         echo $action_name;

        // router match
        $routeMatch = $this->getEvent()->getRouteMatch();
        $routeName = $routeMatch->getMatchedRouteName();
        
        /** get params */
        $params = $routeMatch->getParams();
        echo '<pre style="color:red; font-weight:bold;">';
        print_r($params);
        echo '</pre>';
    }
    public function loginAction() {
    	echo '<h3 style="color:red; font-weight:bold;">'.__METHOD__.'</h3>';
    	$routeMatch = $this->getEvent()->getRouteMatch();
    	$routeName = $routeMatch->getMatchedRouteName();
    	
    	/** get params */
    	$params = $routeMatch->getParams();
    	$status = $routeMatch->getParams('status','no value');
    	echo '<pre style="color:red; font-weight:bold;">';
    	print_r($params);
    	echo '</pre>';
    	echo 'Status => '.$status;
    }
    /** scheme Router */
    public function accountAction() {
    	echo '<h3 style="color:red; font-weight:bold;">'.__METHOD__.'</h3>';
    	/** router match */
    	$routeMatch = $this->getEvent()->getRouteMatch();
    	$routeName = $routeMatch->getMatchedRouteName();
    	 
    	/** get params */
    	$params = $routeMatch->getParams();
    	echo '<pre style="color:red; font-weight:bold;">';
    	print_r($params);
    	echo '</pre>';
    }
    /** literal Router */
    public function contactAction() {
    	echo '<h3 style="color:red; font-weight:bold;">'.__METHOD__.'</h3>';
    	/** router match */
    	$routeMatch = $this->getEvent()->getRouteMatch();
    	$routeName = $routeMatch->getMatchedRouteName();
    	
    	/** get params */
    	$params = $routeMatch->getParams();
    	echo '<pre style="color:red; font-weight:bold;">';
    	print_r($params);
    	echo '</pre>';
    }
}