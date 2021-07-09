
适配器模式

如：在windows使用适配器，也能触发linux对应的功能

<?php

interface WindowsInterface{
	public function screen();
	public function click();
}

class Windows implements WindowsInterface{
	public function screen(){
		echo "使用屏幕";
	}

	public function click(){
		echo "使用点击执行";
	}
}

interface LinuxInteraface{
	public function command();
	public function enter();
}

class Linux implements LinuxInteraface{
	public function command(){
		echo "使用命令行";
	}

	public function enter(){
		echo "使用回车执行";
	}
}

class LinuxAdapter implements WindowsInterface{

	public $linux;

	public function __construct(Linux $linux){
		$this->linux = $linux;
	}

	public function screen(){
		$this->linux->command();
	}

	public function click(){
		$this->linux->enter();
	}
}

$linux_adapter = new LinuxAdapter(new Linux());
$linux_adapter->screen();
$linux_adapter->click();