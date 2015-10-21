<?php
namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class EventController extends AbstractActionController {
    // \Zend\I18n\Filter\Alnum : trích xuất giá trị chuỗi từ a-z A-Z và các giá trị số
    public function index01Action() {
        $eventManager = new \Zend\EventManager\EventManager();
//        $eventManager->attach('oneEvent', function(){
//            echo '<h3 style="color:red;">OneEvent</h3>';
//        });
        $listenerA = $eventManager->attach('oneEvent', function(){
            echo '<h3 style="color:red;">OneEvent</h3>';
        });
        //$eventManager->trigger('oneEvent');
        
        $listenerB = $eventManager->attach('twoEvent', function(){
            echo '<h3 style="color:red;">TwoEvent</h3>';
        });
        //$eventManager->trigger('twoEvent');
        
        /** THÊM MỘT CÔNG VIỆC CHO SỰ KIỆN oneEvent */
        $eventManager->attach('oneEvent',function() {
            echo '<h3 style="color:red">EventOneContinue</h3>';
        });
        /** THÊM MỘT CÔNG VIỆC CHO CẢ 2 SỰ KIỆN => oneEvent và twoEvent */
        /** OneEvent => OneEvent, EventOneCon */
        /** TwoEvent => TwoEvent*/
        $eventManager->attach(array('oneEvent', 'twoEvent'), function() {
            echo '<h3 style="color:blue;">Event one Event and two Event</h3>';
        });
        $eventManager->trigger('oneEvent');
        $eventManager->trigger('twoEvent');
        
        return $this->response;/** Không cần layout và view */
    }
}