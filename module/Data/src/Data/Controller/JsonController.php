<?php
namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use \Zend\Dom\Query;

class JsonController extends AbstractActionController {
    public function __construct() {}
    public function index01Action() {
        $input = array(
            'invokables' => array(
                'Data\Controller\Index'     => 'Data\Controller\IndexController',
                'Data\Controller\Filter'    => 'Data\Controller\FilterController',
                'Data\Controller\Serializer'=> 'Data\Controller\SerializerController',
                'Data\Controller\Escaper'   => 'Data\Controller\EscaperController',
                'Data\Controller\Purifier'  => 'Data\Controller\PurifierController',
                'Data\Controller\Dom'       => 'Data\Controller\DomController',
                'Data\Controller\Json'      => 'Data\Controller\JsonController',
            ),
        );
        $output = \Zend\Json\Json::encode($input);
        $strJson = \Zend\Json\Json::encode($input);
        
        echo \Zend\Json\Json::prettyPrint($output, array("indent" => "\t")).'<br/>';
        
        //$o = \Zend\Json\Json::decode($strJson); /** chuyển về 1 đối tượng object */
        $o = \Zend\Json\Json::decode($strJson, \Zend\Json\Json::TYPE_ARRAY); /** chuyển về 1 array */
        echo '<pre>';
        print_r($o);
        echo '</pre>';
        return $this->response;
    }
    public function index02Action() {
        $viewModel = new \Zend\View\Model\ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
    }
}
