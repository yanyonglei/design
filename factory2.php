<?php
//标准婚姻

interface WuQi{

	public function create();
}



Class Fly implements WuQi{

	public function create(){
		echo '造飞机';
	}
}

Class Dapao implements WuQi{

	public function create(){
		echo '造大炮';
	}
}

//武器工厂

Class WuqiFactory{

	public $obj;

	public function __construct($type){

		$this->obj=new $type();
	}

	public function make(){
		return $this->obj;
	}
}


/*$factory=new WuqiFactory('Fly');
//var_dump($factory->make());
$factory->make()->create();*/

$factory=new WuqiFactory('Dapao');
//var_dump($factory->make());
$factory->make()->create();






