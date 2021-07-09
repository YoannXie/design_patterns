
先理解下面3个概念
说明书：接口类 或 抽象类
服务端：实现接口的类 或 抽象类子类
客户端：程序调用者，这里可以先看看“说明书”，了解类的功能再去调用

什么情况下考虑用interface或abstract？
先看看extends和implements的特点

1、extends
继承普通类：意味着你需要用到父类的属性、功能
继承抽象类：除了普通类的需求外，你还需要把抽象类的抽象特性（方法）“实体化”
abstract类决定了一系列子类的共同特性

2、implements
可以实现多个接口，需要实现接口功能，它只对实现它的类产生影响
interface类决定了任意类的共同功能、但特性不一定一样（方法名一样，方法体不一定一样）

似乎我用继承类或实现接口都差不多？而且接口类还能对任意类作用，那我都用接口不就行了？
不不不，都用接口的话，如果实现接口的两个类，实现的接口方法体完全一样，那就要重复写代码了，这相当冗余
所以当两个类有完全一样的特性（相同的方法、方法体）的情况下，创建父类的方式更好

另一方面，如果从事物的范畴考虑
如果某些属性是几个不同对象的共性的东西，可以考虑使用抽象类，如人、动物类，共性的属性是吃
如果某些属性在几个不同对象中没有共性，或者是属于其他范畴、层级的属性，可以考虑使用接口，如人可以娱乐而兔子不可以，娱乐属于其他范畴的内容

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