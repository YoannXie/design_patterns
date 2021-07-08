
抽象工厂

当新增C类时，同时新增一个C的工厂类即可，这样就不用修改到工厂类
对于工厂类：实现了“开闭原则”，对于修改的封闭，对于扩展的开放

对于整体，还是有问题：
	使用工厂的时候需要知道工厂类名，如果又像普通工厂那样做别名判断，那当有新工厂的时候，还是会出现需要修改判断的问题
所以，工厂模式无论是普通工厂还是抽象工厂，都会有扩展的问题，总体来说是不符合“开闭原则”的
工厂模式比较适合类的数量较为固定的场景！！！

此外，“工厂方法”模式，是把下面代码中，用继承方式获取的特性，换成用实现接口的方式获取特性了
不懂的话就看：https://www.bilibili.com/video/BV1Gp4y1Q7ut?p=4


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