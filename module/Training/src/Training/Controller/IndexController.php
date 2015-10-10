<?php
namespace Training\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController {
    public function indexAction() {
        /** Disable view */
        /* return false;  or=> bắt buộc có tập tin view */
        /** Không gắn view vào và sử dụng layout thì dùng lệnh => return ''; */
        
        /** Disable layout => chỉ hiển thị layout mặc định ở trong view */
        /* $viewModel = new \Zend\View\Model\ViewModel();
        $viewModel->setTemplate(true); 
         return $viewModel();
         */
        echo '<h1>abcsadas</h1>';
        $response = $this->getResponse();
        return $this->response;
    }
    
    public function index2Action() {
        echo __FILE__.__METHOD__.'<br/>';
        $reader = new \Zend\Config\Reader\Ini();
        $reader->setNestSeparator('.');/** default: '.' */
        $data = $reader->fromFile(__DIR__.'/../../../config/ini/module.config.ini');
        echo '<pre class="container">';
        print_r($data);
        echo '</pre>';
        
        /** Viết xuống file cấu hình */
//        $config = new \Zend\Config\Config(array(), true);
//        $config->production                     = array();
//        $config->production->website            = 'zend@zend.com';
//        $config->production->account            = array();
//        $config->production->account->email     = 'zend@zend.vn';
//        $config->production->account->password  = 'asdsd';
//
//        $writer = new \Zend\Config\Writer\Ini();
//        $writer->setNestSeparator('-');
//        $writer->toFile(__DIR__.'/../../../config/ini/config.ini', $config);
        
        
        return false;
        
    }
}