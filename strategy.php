<?php
//策略设计模式 实现某个功能用什么方法

Class Travel {
	public $tool;

	public function __construct($tool){

		$this->tool=$tool;
	}

	public function arrive(){
		echo '去琴房'.$this->tool->go().'四季豆i阿三';
	}
}

interface Tool{

	public function go();
}

class Fly implements Tool{

	public function go(){
		echo '打的';
	}
}

Class Bike implements Tool{

	public function go(){
		
		echo '11路车';
	}
}

$travel=new Travel(new Bike());

$travel->arrive();

