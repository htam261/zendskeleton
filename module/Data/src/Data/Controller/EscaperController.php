<?php
namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Escaper\Escaper as Escape;

class EscaperController extends AbstractActionController {
    public function Index01Action() {
        /** JS SCRIPT */
        $input = '<script>alert("abc");</script>';
        echo htmlentities($input);
        return $this->response;
    }
    
    public function Index02Action() {
        /** JS SCRIPT */
        $input = '<script>alert("abc");</script>';
        $escaper = new \Zend\Escaper\Escaper();
        echo  $output = $escaper->escapeHtml($input);
        return $this->response;
    }
    
    public function Index03Action() {
        /** JS SCRIPT */
        $input = <<<INPUT
' onmouseover='alert(/ZF2!/);
INPUT;
        $escaper = new Escape('utf-8');
        $output = $escaper->escapeJs($input);
        echo '<span title='.$output.'>Zend</span>';
        return $this->response;
    }
    
    public function Index04Action() {
        /** JS SCRIPT */
        $input = <<<INPUT
' onmouseover='alert(/ZF2!/);
INPUT;
        $escaper = new Escape('utf-8');
        $output = $escaper->escapeHtmlAttr($input);
        echo '<span title='.$output.'>Zend</span>';
        return $this->response;
    }
    
    public function Index05Action() {
        $viewModel = new \Zend\View\Model\ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
    }
    
    public function Index06Action() {
        $viewModel = new \Zend\View\Model\ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
    }
    
    public function Index07Action() {
        $viewModel = new \Zend\View\Model\ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
    }
    
    
}
