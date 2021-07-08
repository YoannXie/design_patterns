
静态语言：在使用变量前必须声明变量的数据类型，如Java、C++
动态语言：在运行时才确定变量的数据类型，如PHP、Python
	这种差异会影响到设计模式，所以PHP设计模式不能生搬硬套Java的设计模式

下面通过 PHP多态的实现 进一步体会这种差异：

<?php
abstract class People{
	abstract function play();
}

class Men extends People{
	public function play()
	{
		echo "打游戏";
	}
}

class Women extends People{
	public function play()
	{
		echo "看电视剧";
	}
}

class Rocket{
	public function play()
	{
		echo "Boom!";
	}
}

class Client{
	public static function checkPlay($people)
	{
		$people->play();
	}
}

Client::checkPlay(new Men());
Client::checkPlay(new Women());
Client::checkPlay(new Rocket());

?>

上面的代码中，由于checkPlay没有限制参数的类型，所以像Rocket这样的内容也允许被传进去了
这就是动态语言的一个特点
而静态语言不会让这种情况发生

当然，我们也可以像Java那样，对参数类型进行限制，改成 checkPlay(People $people) 就行了