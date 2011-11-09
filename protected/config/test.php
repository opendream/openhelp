<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
			*/
			'db'=>array(
    			'connectionString' => 'mysql:host=localhost;dbname=openhelp',
    			'emulatePrepare' => true,
    			'username' => 'openhelp',
    			'password' => 'openhelp',
    			'charset' => 'utf8',
    		),
    		'log'=>array(
				'class'=>'CLogRouter',
				'routes'=>array(
					array(
						'class'=>'CFileLogRoute',
						'levels'=>'error, warning',
					),
					array(
			         'class' => 'CWebLogRoute',
			         'categories' => 'example',
			         'levels' => 'trace',
			         'showInFireBug' => true,
			        ),
				),
			),
		),
		'import'=>array(
		    'application.models.*',
		    'application.components.*',
		    'application.components.manager.*',
    	),
	)
);
