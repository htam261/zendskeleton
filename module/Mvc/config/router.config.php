<?php
// /** hostnameRoute */
// $hostnameRoute = array(
// 	'type' => 'hostname'
// 	, 'options' => array(
// 		'route' => '/login'
// 		, 'constraints' => array(
// 			'module' 		=> '[a-zA-Z][a-zA-Z0-9-_]+',
// 			'controller' 	=> '[a-zA-Z][a-zA-Z0-9-_]+',
// 			'action' 		=> '[a-zA-Z][a-zA-Z0-9-_]+',
// 		)
// 		, 'defaults' => array(
// 			'_NAMESPACE_' 	=> 'Mvc\Controller'
// 			, 'controller' 	=> 'router'
// 			, 'action' 		=> 'index'
// 		)
// 	)
// );
// /** literalRoute */
// $literalRoute = array(
// 	'type' => 'Literal'
// 	, 'options' => array(
// 		'route' => '/contact'
// 		, 'constraints' => array(
// 			'module' 		=> '[a-zA-Z][a-zA-Z0-9-_]+',
// 			'controller' 	=> '[a-zA-Z][a-zA-Z0-9-_]+',
// 			'action' 		=> '[a-zA-Z][a-zA-Z0-9-_]+',
// 		)
// 		, 'defaults' => array(
// 			'_NAMESPACE_' => 'Mvc\Controller'
// 			, 'controller' => 'router'
// 			, 'action' => 'contact'
// 		)
// 	)
// );
/** Zend\Mvc\Router\Http\Segment */
$segmentRoute = array(
	'type' => 'Segment',
	'options' => array(
		'route' => '/:module[/]',
		'constraints' => array(
			'module' 		=> '[a-zA-Z][a-zA-Z0-9-_]+',
			'controller' 	=> '[a-zA-Z][a-zA-Z0-9-_]+',
			'action' 		=> '[a-zA-Z][a-zA-Z0-9-_]+',
		),
		'defaults' => array(
			'_NAMESPACE_' 	=> 'Mvc\Controller',
			'controller' 	=> 'router',
			'action' 		=> 'index',
		)
	)
);
return array(
// 	'router' => array(
// 		'routes' => array(
// // 			'hostnameRoute' => $hostnameRoute
// //  			, 'literalRoute' => $literalRoute
//  			 'segmentRoute' => $segmentRoute
// 		),
// 	),
);