<?php
return array(
    /** bắt buộc router, controllers, */
    'controllers'   => array(
        'invokables' => array(
            'Mvc\Controller\Index'     		=> 'Mvc\Controller\IndexController',
            'Mvc\Controller\Event'     		=> 'Mvc\Controller\EventController',
            'Mvc\Controller\Service'   		=> 'Mvc\Controller\ServiceController',
        	'Mvc\Controller\ViewHelper'   	=> 'Mvc\Controller\ViewHelperController',
        	'Mvc\Controller\ViewManager'   	=> 'Mvc\Controller\ViewManagerController',
        	'Mvc\Controller\Router'   		=> 'Mvc\Controller\RouterController',
        ),
    ),
    'view_manager'  => array(
    	/** định nghĩa thẻ doctype */
    	'doctype' => 'HTML5',
    	/** Cấu hình và thiết lập thông báo lỗi **/
    		/** not process */
//     	'display_not_found_reason' => true,
//     	'display_not_found_reason' => false,
//     	'not_found_template' => 'error/404',
    		/** not found page */
    	'display_exceptions' => true,
    	'exception_template' => 'error/index',
    	/**  định nghĩa folder view => cho view/$module_name/$controller_name/$action_name .phtml */
        'template_path_stack' => array(__DIR__.'/../view'),
    	/** Định nghĩa các layout mặc định */
    	'template_map' => array(
    		'layout/layout'           	=> __DIR__ . '/../view/layout/layout.phtml',
    		'layout/home'           	=> __DIR__ . '/../view/layout/layout02.phtml',
			'error/404' 				=> __DIR__.'/../view/error/404.phtml',
			'error/index' 				=> __DIR__.'/../view/error/index.phtml',
			'error/myerror' 			=> __DIR__.'/../view/error/custom.phtml',
			'vm/header' 				=> __DIR__.'/../view/mvc/view-manager/header.phtml',
			'vm/home' 					=> __DIR__.'/../view/mvc/view-manager/home.phtml',
			'view/abc' 					=> __DIR__.'/../view/mvc/abc.phtml',
    			
    		'mvc/view-helper/index15'  => __DIR__ . '/../view/view-helper/index15.phtml',
    	),
    )
);  