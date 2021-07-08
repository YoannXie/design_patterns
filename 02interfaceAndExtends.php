
什么情况下考虑用interface或extends？
在此之前需要先区分与extends的使用场景
1、extends可以继承普通类，也可以继承抽象类；它贯穿了子类的特性
继承抽象类：意味着你需要把抽象类的特性“实体化”
继承普通类：意味着你需要用到父类的特性
2、implements可以实现多个接口，它只对实现它的类产生影响


如：

<?php

abstract class Animal{
	abstract function eat();
	abstract function sleep();
}

interface Entertainment{
	function playGames();
	function singSongs();
}

class Men extends Animal implements Entertainment{
	public function eat()
	{
		echo "吃饭";
	}

	public function sleep()
	{
		echo "睡在床上";
	}

	public function playGames()
	{
		echo "玩lol";
	}

	public function singSongs()
	{
		echo "唱流行歌";
	}
}

class Rabbit extends Animal{
	public function eat()
	{
		echo "吃胡萝卜";
	}

	public function sleep()
	{
		echo "睡在洞穴";
	}
}

class Women extends Animal implements Entertainment{
	public function eat()
	{
		echo "吃炒饭";
	}

	public function sleep()
	{
		echo "睡在客厅";
	}

	public function playGames()
	{
		echo "玩庄园";
	}

	public function singSongs()
	{
		echo "唱戏剧";
	}
}


interface Student{
	function goToSchool();
	function readBooks();
}

class girl extends Women implements Student{

	public function eat()
	{
		echo "吃钙片";
	}

	public function goToSchool()
	{
		echo "上小学";
	}

	public function readBooks()
	{
		echo "看语文";
	}

}

?>


如上，
如果某些属性是几个不同对象的共性的东西，可以考虑使用抽象类，如人、动物类，共性的属性是吃
如果某些属性在几个不同对象中没有共性，或者是属于其他范畴、层级的属性，可以考虑使用接口，如人可以娱乐而兔子不可以，娱乐属于其他范畴的内容