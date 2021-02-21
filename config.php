<?php
require 'environment.php';

//define("BASE", "http://localhost/Plataforma_EAD/");
define("BASE", "http://192.168.1.29/Plataforma_EAD/");  /*definição de seu IP*/

try {

	global $config;
	$config = [];
	if (ENVIRONMENT == 'development') {
		$config['dbname'] = 'plataforma_ead';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	} else {
		$config['dbname'] = 'plataforma_ead';
		$config['host'] = '192.168.1.29';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}
} catch (Exception $e) {
	echo 'error ao se conectar com o banco de dados' . $e->getMessage();
}
