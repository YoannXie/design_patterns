
建造者模式

通常情况，我们实例化一个A，它里面的属性都是初始化状态
当我们想在这个初始化的基础上，给该类添砖加瓦，让它变成一栋具有卧室、厨房、浴室的房子，有下面两种方法：
1、在构造函数设置类的各式各样的属性、执行各式各样的方法
2、使用建造者模式


<?php

class A{

	public $parts = [];

	public function setPart($key,$value){
		$this->parts[$key] = $value;
	}

}

class Top{

}

interface BuilderInterface{
	public function init();
	public function addParts();
	public function get();
}

class Abuilder implements BuilderInterface{

	public $a;

	public function init(){
		$this->a = new A();
	}

	public function addParts(){
		$this->a->setPart('top',new Top());
	}

	public function get(){
		return $this->a;
	}

}


class Builder{

	public function build(BuilderInterface $builder){
		$builder->init();
		$builder->addParts();
		return $builder->get();
	}

}

$builder = new Builder();
$a = $builder->build(new Abuilder());
var_dump($a);