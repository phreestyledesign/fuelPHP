<?php
return array(
	'version' => 
	array(
		'app' => 
		array(
			'default' => 0,
		),
		'module' => 
		array(
		),
		'package' => 
		array(
			'auth' => 
			array(
				0 => '001_auth_create_usertables',
				1 => '002_auth_create_grouptables',
				2 => '003_auth_create_roletables',
				3 => '004_auth_create_permissiontables',
			),
		),
	),
	'folder' => 'migrations/',
	'table' => 'migration',
);
