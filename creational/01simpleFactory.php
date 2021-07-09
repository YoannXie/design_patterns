
简单工厂模式
优点：调用者只需要知道type是什么就行了，不需要知道对应的类名再去实例化
缺点：新增C类时，需要修改工厂类，不符合开闭原则


<?php

class A {
	public function go()
	{
		echo "a";
	}
}

class B {
	public function go()
	{
		echo "b";
	}
}

class Factory{
	public function create($type)
	{
		if($type == 'a'){
			return new A();
		}elseif($type == 'b'){
			return new B();
		}
	}
}

$factory = new Factory();
$a = $factory->create('a');
$a->go();
$b = $factory->create('b');
$b->go();