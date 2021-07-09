
注册模式
对象的存放

<?php 

class Top{

}

class Register {

	public $instances = [];

	public function set($key,$value){
		$this->instances[$key] = $value;
	}

	public function get($key){
		if(array_key_exists($key, $this->instances)){
			return $this->instances[$key];
		}else{
			return null;
		}
	} 
}

$register = new Register();
$register->set('top',new Top());
$top = $register->get('top');
var_dump($top);
