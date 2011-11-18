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
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
			),
    		'log'=>array(
				'class'=>'CLogRouter',
				'routes'=>array(
					array(
						'class'=>'CFileLogRoute',
						'categories' => 'test-openhelp',
			         	'levels' => 'trace',
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
		'import'=>array(
		    'application.models.*',
		    'application.components.*',
		    'application.components.manager.*',
    	),
	)
);
