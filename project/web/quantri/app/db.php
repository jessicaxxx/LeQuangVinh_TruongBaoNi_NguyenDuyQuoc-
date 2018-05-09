<?php
//require_once 'models/config.php';

class db
{
	public static $conn;

	public function __construct()
	{
		self::$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		self::$conn->set_charset('utf8');
	}
	
	public function getdata($rs){

		$arr = array();
		while($row = $rs->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}
	
	public function __destruct(){
		self::$conn->close();
	}
}

?>