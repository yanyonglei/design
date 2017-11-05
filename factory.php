<?php
//工厂设计模式
//普通工厂
class Fly{

	public function create(){

		echo '打造飞机';
	}
}


class DaPao{


	public function create(){

		echo '打造大炮';
	}
}


class Factory{

	public static function create($type){

		return new $type();

	}
}

$factory=Factory::create('Fly');

$factory->create();


$f=Factory::create('DaPao');
$f->create();

