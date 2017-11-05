<?php

interface Wuqi{
	public function create();
}

Class BigFly implements Wuqi{

	public function create(){

		echo '造客机';
	}
}

Class SmallFly implements Wuqi{

	public function create(){
		echo '造战斗机';
	}
}

interface Factory{

	public function FlyBig();
	public function FlySmall();
}

class FlyFactory implements Factory{

	public function FlyBig(){
		return new BigFly();
	}
	public function FlySmall(){

		return new SmallFly();
	}
}


$fly=new FlyFactory();

$fly->FlySmall()->create();





