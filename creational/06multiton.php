
多例模式

<?php 

class Multiton {

	private static $instances = [];

	private function __construct(){}

	private function __clone(){}

	private function __wakeup(){}

	public static function getInstances($type)
	{
		if(array_key_exists($type, self::$instances)){
			return self::$instances[$type];
		}else{
			return self::$instances[$type] = new self();
		}
	}

}