<?php 
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host'='127.0.0.1', //  This is Localhost Ip address
		'username'='root', //This is your Mysql Username
		'password'='', //This is your Mysql Password 
		'db'='login', //This is Your Database Name

		),
	'remeber' => array(
		'cookie_name' => 'hash',
		'cookie_expire' =  604800 // set Time for Expire Cookies
		),
	'session' => array(
		'session_name' => 'user'

		),

	);

spl_autoload_register(function($class)
{
	require_once 'classes/' . $class. '.php';
});
require_once 'functions/sanitize.php';


?>