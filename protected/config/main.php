<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'OpenHelp',
  // Internationalization
  'language' => 'th',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.components.manager.*',
		'application.components.odhtml.*',
		'application.components.querypath.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1234',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('192.168.1.*','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'class' => 'WebUser',
			'allowAutoLogin'=>true,
			'autoUpdateFlash' => false,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'page/<url:\w+>'=>'page/view',
				//'webform/<url:\w+>'=>'webform/view',
				//'webform/<url:\w+>/<action:\w+>'=>'webform/<action>/<url>',
				
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				
				
				'api/<controller:\w+>/<id:\d+>'=>'api/<controller>/view',
				'api/<controller:\w+>/<action:\w+>/<id:\d+>'=>'api/<controller>/<action>',
				'api/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

			),
		),
		
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		'db'=>require(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.'/config/db.php'),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			 'errorAction'=>'site/error',
			 ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				array(
         'class' => 'CFileLogRoute',
         'categories' => 'example',
         'levels' => 'trace',
         //'showInFireBug' => true,
        ),
			),
		),
	),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.'/config/params.php'),
);
