<?php
 class DB
 {
 	private static $_instance = null;
 	private $_pdo;

# code... this function connect to your database using PDO
function __construct()
	 	{
	 		
	 		try {
	 			$this->_pdo = new PDO(
	 				'mysql:host='.Config::get('mysql/host').';
	 				 dbname='.Config::get('mysql/db'),
	 				 Config::get('mysql/username'),
	 				 Config::get('mysql/password')
	 			) ;
	 			
	 		} catch (Exception $e) { 
	 			die($e->getMessage());
	 		}

	 	}
# code... this function is to get an instance of database 
public static function getInstance()
	 	   {
	 
	 		if (!isset(self::$_instance)) {
	 			# code...
	 			self::$_instance = new DB; 
	 		}

			return self::$_instance;
	 	   }
}
?>