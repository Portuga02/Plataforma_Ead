<?php
require 'environment.php';

define("BASE", "http://localhost/Plataforma_EAD/");

global $config;
$config = array();
if (ENVIRONMENT == 'development') {
	$config['dbname'] = 'plataforma_ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'plataforma_ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
