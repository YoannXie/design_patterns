
抽象工厂

当新增C类时，同时新增一个C的工厂类即可，这样就不用修改到工厂类
对于工厂类来说，实现了开闭原则

但对于整体来说，还是有问题：
	使用工厂的时候需要知道工厂类名，如果又像普通工厂那样做别名判断，那当有新工厂的时候，还是会出现需要修改判断的问题
所以，工厂模式无论是普通工厂还是抽象工厂，都会有扩展的问题，总体来说是不符合开闭原则的
工厂模式比较适合类的数量较为固定的场景！！！


<?php 

class A{
	public function go()
	{
		echo "a";
	}
}

class B{
	public function go()
	{
		echo "b";
	}
}


abstract class Factory{
	abstract function create();
}

class AFactory extends Factory{
	public function create()
	{
		return new A();
	}
}

class BFactory extends Factory{
	public function create()
	{
		return new B();
	}
}


$factory = new AFactory();
$a = $factory->create();
$a->go();
$factory = new BFactory();
$b = $factory->create();
$b->go();

?>