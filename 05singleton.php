
单例模式：禁止多个相同实例共存


做法：
1、禁止使用构造方法，防止外部直接new
2、禁止克隆类
3、只对外开放一个静态方法，实例化自身并返回；其他的属性、方法都不开放
4、设置一个静态属性保存实例，防止在多次调用静态方法时，重复实例化
5、对方法追加final关键字，防止子类方法重写父类方法


<?php 

class Single{

	protected static $object = null;

	final protected function __construct()
	{

	}

	public static function getObject()
	{
		if(self::$object){
			return self::$object;
		}else{
			return self::$object = new self();
		}
	}

	final protected function __clone()
	{

	}

}

class Child extends Single{

	// 试试不加final
	// public function __construct()
	// {
	// 	return new parent();
	// }

}

$a = Single::getObject();
$b = Single::getObject();
if($a === $b){
	echo "same";
}else{
	echo "diff";
}

$c = new Child();
if($a === $c){
	echo "same";
}else{
	echo "diff";
}