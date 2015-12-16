<?php
/** hostname */
$hostname = array(
	'type' 		=> 'hostname',
	'options' 	=> array(
		'route' 	=> 'zendskeleton.com',
		'defaults' 	=> array(
			'_NAMESPACE_' 	=> 'Route\Controller',
			'controller' 	=> 'Route',
			'action' 		=> 'index',
		)
	)
);
/** home => default */
// $home = array(
// 	'type' => 'Zend\Mvc\Router\Http\Literal',
// 	'options' => array(
// 		'route'    => '/',
// 		'defaults' => array(
// 			'controller' => 'Route\Controller\Index',
// 			'action'     => 'index',
// 		),
// 	),
// );
/** application => default */
// $app = array(
// 	'type'    => 'Literal',
// 	'options' => array(
// 		'route'    => '/route',
// 		/** action mặc định */
// 		'defaults' => array(
// 			'__NAMESPACE__' => 'Route\Controller',
// 			'controller'    => 'Index',
// 			'action'        => 'index',
// 		),
// 	),
// 	'may_terminate' => true,
// 	'child_routes' => array(
// 		'default' => array(
// 			'type'    => 'Segment',
// 			'options' => array(
// 				'route'    => '/[:controller[/:action]]',
// 				'constraints' => array(
// 					'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
// 					'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
// 				),
// 				'defaults' => array(),
// 			),
// 		),
// 	),
// );
return array(
	'router' => array(
		'routes' => array(
			/** default */
// 			'home' 			=> $home,
// 			'application' 	=> $app,
			/** hostname */
			'hostname'		=> $hostname,
		),
	),
);