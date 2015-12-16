<?php
namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ViewManagerController extends AbstractActionController {
    public function index01Action() {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
        $abc = 'This is variables in here';
        return array(
        		'my_variables' => $abc,        );
    }
    
    public function index03Action() {
    	$view = new \Zend\View\Model\ViewModel();
    	$view->setTemplate('mvc\view-manager\index02');
    	return $view;
    }
    /** Nested file */
    public function homeAction() {
    	/** Tao view chính */
    	$view = new \Zend\View\Model\ViewModel();
    	$view->setTemplate('mvc\view-manager\home');
    	
    	/** Tạo view header => là con của home */
    	$headerView = new \Zend\View\Model\ViewModel(array('headerContent' => 'header Content'));
    	$headerView->setTemplate('mvc\view-manager\header');
    	
    	/** Tạo view mainContent => là con của home */
    	$mainContentView = new \Zend\View\Model\ViewModel();
    	$mainContentView->setTemplate('mvc\view-manager\main-content');
    	
    	/** Tạo view leftContent => là con của mainContent */
    	$leftContentView = new \Zend\View\Model\ViewModel();
    	$leftContentView->setTemplate('mvc\view-manager\left-content');
    	$mainContentView->addChild($leftContentView, 'leftContentView');
    	
    	/** Tạo view rightContent => là con của mainContent */
    	$rightContentView = new \Zend\View\Model\ViewModel(array('right_abc' => 'right','right-abc'=>'sdasdas_xxxxxxxxx'));
    	$rightContentView->setTemplate('mvc\view-manager\right-content');
    	$mainContentView->addChild($rightContentView, 'rightContentView');
    	
    	$view->addChild($headerView, 'headerView')
    		->addChild($mainContentView, 'mainContentView');
    	
    	return $view;
    }
    public function headerAction() {
    
    }
    public function mainContentAction() {
    	 
    }
    public function leftContentAction() {
    	 
    }
    public function rightContentAction() {
    	 
    }
    /** Thêm phần view cho layout */
    public function index05Action() {
    	echo '<h3 style="color:red; font-weight:bold;">'.__METHOD__.'</h3>'; 
    	/** get layout obj */
    	$layout = $this->layout();
    	
    	/** gắn header vào layout */
    	$header = new \Zend\View\Model\ViewModel(array('headerContent' => 'asazbauxgasjbdhaxuyzas'));
    	$header->setTemplate('mvc\view-manager\header');
    	
    	$layout->addChild($header, 'header');
    }
    /** Thêm phần view cho layout => sử dụng template_map => declare: vm/header */
    public function index06Action() {
		/** unknown the css */
//     	$render 	= $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
//     	$headLink 	= $render->headLink();
//     	$headLink	->appendStylesheet(PUBLIC_URL.'/css/bootstrap.min.css', 'screen')
//     	->appendStylesheet(PUBLIC_URL.'/css/style.css', 'screen');
    	
    	echo '<h3 style="color:red; font-weight:bold;">'.__METHOD__.'</h3>';
//     	/** get layout obj */
//     	$layout = $this->layout();
//     	/** replace template now */
//     	$layout->setTemplate('vm/home');
//     	/** gắn header vào layout */
//     	$header = new \Zend\View\Model\ViewModel(array('headerContent' => 'asazbauxgasjbdhaxuyzas'));
//     	$header->setTemplate('vm/header');
    	
//     	$mainContent = new \Zend\View\Model\ViewModel();
//     	$mainContent->setTemplate('mvc/view-manager/main-content');
    	
//     	$leftContent = new \Zend\View\Model\ViewModel();
//     	$leftContent->setTemplate('mvc/view-manager/left-content');
//     	$mainContent->addChild($leftContent, 'leftContentView');
    	
//     	$rightContent = new \Zend\View\Model\ViewModel();
//     	$rightContent->setTemplate('mvc/view-manager/right-content');
//     	$mainContent->addChild($rightContent, 'rightContentView');
    	 
//     	$layout->addChild($header, 'headerView');
//     	$layout->addChild($mainContent, 'mainContentView');
		
    	/** truyền dữ liệu cho file abc.phtml khi file index06.phtml lấy nội dung file abc.phtml */
    	$view = new \Zend\View\Model\ViewModel(array('valueOne' => 'Zend Framework 2'));
    	return $view;
    	
    }
}