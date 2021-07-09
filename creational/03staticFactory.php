
静态工厂模式

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

class Factory {
	public static build($type)
	{
		if($type == 'a'){
			return new A();
		}elseif($type == 'b'){
			return new B();
		}
	}
}

$a = Factory::build('a');
$a->go();
$b = Factory::build('b');
$b->go();