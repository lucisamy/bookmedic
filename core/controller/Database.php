<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b138a97ccd749f";$this->pass="92f630d0";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_0e7da85e1d15061";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
