<?php
class DATABASE_CONFIG {

	public $test = array(
		'datasource' => 'Database/Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'sup',
	);
	// public $default = array(
		// 'datasource' => 'Database/Mysql',
		// 'persistent' => false,
		// 'host' => 'gama.polijr.poli.usp.br',
		// 'login' => 'sup',
		// 'password' => 'sup',
		// 'database' => 'sup',
	// );
	
}
