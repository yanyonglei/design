<?php
//工厂方法
//工厂方法接口化
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

interface Factory{

	public function make();
}

class FlyFactory implements Factory{

	public function make(){
		return new Fly();
	}
}


class DaPaoFactory implements Factory{

	public function make(){

		return new Dapao();
	}
}

$factory=new DaPaoFactory();

$factory->make()->create();


