
工厂方法
抽象工厂提供创建对象的方法init，子类使用该方法获取自身产品的实例

与抽象工厂相似，但抽象工厂更多是处理产品线的实例，如产品A、产品B
而工厂方法可以创建产品线中的产品，如产品A1、产品A2


<?php 

class A1 {
	public function go()
	{
		echo "a1";
	}
}

class A2 {
	public function go()
	{
		echo "a2";
	}
}

class B1 {
	public function go()
	{
		echo "b1";
	}
}

class B2 {
	public function go()
	{
		echo "b2";
	}
}

abstract class Factory {

	public $instance;

	abstract function createProduct($type);

	public function create($type)
	{
		return $this->createProduct($type);
	}
}

class AFactory extends Factory {
	public function createProduct($type)
	{
		if($type == 'a1'){
			return new A1();
		}elseif($type == 'a2'){
			return new A2();
		}
	}
}

class BFactory extends Factory {

	public function createProduct($type)
	{
		if($type == 'b1'){
			return new B1();
		}elseif($type == 'b2'){
			return new B2();
		}
	}
}

$factory = new AFactory();
$a = $factory->create('a1');
$a->go();
$factory = new BFactory();
$b = $factory->create('b2');
$b->go();