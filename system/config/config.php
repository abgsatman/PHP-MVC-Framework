<?php

class CONFIG {

	public static $config = array (
	
		'baseurl'   => 'http://localhost/MVC/',    //system index //$config['baseurl']
		
		'database'  => array (                      //database information
			'hostname' => 'localhost',			   //$config['database']['hostname']
			'username' => 'root',                  //$config['database']['username']
			'password' => '',				   //$config['database']['password']
			'dbname'   => 'mymvc'                  //$config['database']['dbname']
		)
	);
}
?>