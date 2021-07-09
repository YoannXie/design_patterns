
流接口 模式
如生成SQL查询语句

<?php 

class Sql{

	public $attributes;
	public $table;

	public function select($attributes){
		$this->attributes = $attributes;
		return $this;
	}

	public function from($table){
		$this->table = $table;
		return $this;
	}

	public function getQuery(){
		return 'SELECT '.$this->attributes.
				' FROM '.$this->table;
	}
}

$sql = new Sql();
$query = $sql->select('*')->from('user')->getQuery();
echo $query;