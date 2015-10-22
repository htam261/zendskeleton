<?php
namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\EventManager\EventManager;

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
        //$eventManager->trigger('oneEvent');
        //$eventManager->trigger('twoEvent');
        /** THÊM MỘT CÔNG VIỆC CHO CẢ NHIỀU SỰ KIỆN => oneEvent và twoEvent */
        /** OneEvent => OneEvent, EventOneCon */
        /** TwoEvent => TwoEvent*/
        $eventManager->attach('treeEvent', function() {
            echo '<h3 style="color:blue;">Event Three - Doing</h3>';
        });
        $eventManager->attach('*', function() {
            echo '<h3 style="color:blue;">Doing</h3>';
        });
        $eventManager->trigger('oneEvent');
        
        return $this->response;/** Không cần layout và view */
    }
    public function index02Action() {
        $eventManager = new EventManager();
        
        // $callback Anonymous function
        // Case 01
        $eventManager->attach('eventOne', function() {
            echo '<h3 style="color:red;font-weight:bold;">EventOne</h3>';
        });
        $eventManager->trigger('eventOne');
        // Case 02
        $listener01 = function() {
            echo '<h3 style="color:blue;">Event One</h3>';
        };
        $eventManager->attach('eventOne', $listener01);
        /** Lỗi case 3 vs case 4 */
        // Case 03
        //$eventManager->attach('eventTwo','\ZendVN\Event\Functions::funcOne');
        $eventManager->attach('eventTwo',array('\ZendVN\Event\Functions'=>'funcOne'));
        $eventManager->trigger('eventTwo');
        
        // Case 04
        $eventManager->attach('eventThree_',array('\ZendVN\Event\Functions'=>'funcTwo'));
        $eventManager->trigger('eventThree_');
        return $this->response;
    }
    /** Priority => Độ ưu tiên **/
    public function index03Action() {
        $eventManager = new EventManager();
        $eventManager->attach('eventOne', function() {
            echo '<h3 style="color:red;font-weight:bold;">eventOne - 01</h3>';
        }, -1000);
        $eventManager->attach('eventOne', function() {
            echo '<h3 style="color:red;font-weight:bold;">eventTwo - 02</h3>';
        },0);
        $eventManager->attach('eventOne',array('ZendVN\Event\Functions','funcOne'));
        $eventManager->attach('eventOne',array('ZendVN\Event\Functions','funcTwo'),1000);
        $eventManager->trigger('eventOne');
        
        return $this->response;
    }
    /** Params in EventManager => các sử dụng các tham số và phương thức */
    /** \Zend\EventManager\EventInterface */
    public function index04Action() {
        $eventManager = new EventManager();
        $eventManager->attach('eventOne',function(\Zend\EventManager\EventInterface $e) {
            
        });
        $listener01 = function(\Zend\EventManager\EventInterface $e) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
            $name = $e->getName();
            $params = $e->getParams();
            $target = $e->getTarget();
            $e->setParam('course', 'default');
            echo $param_name = $e->getParam('course','default');
            
        };
        $eventManager->attach('eventOne',$listener01);
        
        $params = array(
            'course' => 'Zend Framework 2',
            'year'   => '2015'
        );
        $eventManager->trigger('eventOne',this, $params);
        
        return $this->response;
    }
    /** \Zend\EventManager\EventInterface */
    public function index05Action() {
        $eventManager = new EventManager();
        $eventManager->attach('eventOne',function(\Zend\EventManager\EventInterface $e) {
            
        });
        $listener01 = function(\Zend\EventManager\EventInterface $e) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
            $name = $e->getName();
            $params = $e->getParams();
            $target = $e->getTarget();
            $e->setParam('course', 'default');
            echo $param_name = $e->getParam('course','default');
            
        };
        $eventManager->attach('eventOne',$listener01);
        
        $params = array(
            'course' => 'Zend Framework 2',
            'year'   => '2015'
        );
        $eventManager->trigger('eventOne',this, $params);
        
        return $this->response;
    }
}