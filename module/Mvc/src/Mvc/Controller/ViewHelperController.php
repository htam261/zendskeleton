<?php
namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ViewHelperController extends AbstractActionController {
    public function index01Action() {
        echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
        $this->layout('layout/layout');
    }
    public function index02Action() {
    	echo '<h3 style="color:red; font-weight:bold;">'.__METHOD__.'</h3>';
    	$this->layout('layout/layout');
    }
    /** Truyền dữ liệu cho model */
    public function index03Action() {
    	echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    	$arrayCourse = array(
    			array('name' => 'PHP', 'students' => 500), 
    			array('name' => 'Zend 2', 'students' => 200), 
    			array('name' => 'Joomla', 'students' => 200), 
    			array('name' => 'jQuery', 'students' => 200), 
    	);
    	$viewModel = new \Zend\View\Model\ViewModel(
    			array(
    				'courses' => $arrayCourse,			
    			)
    		);
    	return $viewModel;
    }
    /** Zend\View\Helper\DocType */
    /** Zend\View\Helper\Escapse */
    public function index04Action() {
    	echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
        $this->layout('layout/layout');
    }
    /** Zend\View\Helper\Gravatar */
    public function index05Action() {
    	echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    	$this->layout('layout/layout');
    }
    /** Zend\View\Helper\HeadTitle */
    /** Thiết lập HeadTitle ở View */
    public function index06Action() {
//     	$render = $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
//     	$render->headTitle('index06Controller');
    	echo '<h3 style="color:red;font-weight:bold;">'.__METHOD__.'</h3>';
    	$this->layout('layout/layout');
    }
    /** Zend\View\Helper\HeadMeta */
    /** Thiết lập HeadMeta ở View */
    public function index07Action() {
    	$render = $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
    	$render->headMeta()->appendHttpEquiv('REFRESH','1800');
    	$this->layout('layout/layout');
    }
    /** Thiết lập HeadMeta ở View */
    /** Zend\View\Helper\HeadLink */
    public function index08Action() {
    	$render = $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
    	$headLink = $render->headLink();
    	$headLink->appendStylesheet(PUBLIC_URL.'/css/style.css','screen');
    	$this->layout('layout/layout');
    }
    /** Zend\View\Helper\HeadScript */
    public function index09Action() {
    	$render = $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
    	$headScript = $render->headScript();
    	$headScript->appendFile(PUBLIC_URL.'/js/bootstrap.js','text/javascript');
    	$this->layout('layout/layout');
    }
    /**  Zend\View\Helper\HtmlList */
    public function index11Action() {
    	$this->layout('layout/layout');
    }
    /**  Zend\View\Helper\HtmlFlash */
    public function index12Action() {
    	$this->layout('layout/layout');
    }
    /**  Zend\View\Helper\Json */
    public function index13Action() {
    	$this->layout('layout/layout');
    }
    /**  Partial - PartialLoop */
    public function index14Action() {
    	$this->layout('layout/layout');
    }
    /**  Partial - PartialLoop */
    public function index15Action() {
    	$this->layout('layout/layout');
    }
    /**  Partial - PartialLoop */
    public function index16Action() {
    	$this->layout('layout/layout');
    }
    /** PartialLoop */
    public function index17Action() {
    	$this->layout('layout/layout');
    }
    /** Placeholdder */
    public function index18Action() {
    	$this->layout('layout/layout');
    }
    /** ServerUrl (only call in Controller ) */
    public function index20Action() {
    	$serverUrl = new \Zend\View\Helper\ServerUrl();
    	/** getHost */
    	echo $serverUrl->getHost();
    	/** getPort */
    	echo $serverUrl->getPort();
    	/** getScheme */
    	echo $serverUrl->getScheme();
    	$this->layout('layout/layout');
    }
    /** Create view helper */
    public function index21Action() {
    	$this->layout('layout/layout');
    }
}