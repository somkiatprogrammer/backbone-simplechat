backbone-simplechat
======================
Simplechat Application based on BackboneJS

This project, is based on Laravel PHP Framework and BackboneJS, is a simplechat application by assuming 2 persons chat in one computer. So it can not use for real live chat, but you can develop it for live chat. 

Installation
------------

You need to run `php composer.phar update` for getting core libraries from Github such as Laravel PHP Framework, etc.

How To Use
------
#### Set Database in config/database.php ####
	'mysql' => [
		'driver'    => 'mysql',
		'host'      => env('DB_HOST', 'XXX'),
		'database'  => env('DB_DATABASE', 'XXX'),
		'username'  => env('DB_USERNAME', 'XXX'),
		'password'  => env('DB_PASSWORD', 'XXX'),
		'charset'   => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix'    => '',
		'strict'    => false,
	],
	
#### Create Table in Database ####
	run url: {domain_name}/public/install