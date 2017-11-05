<?php
//依赖，模式


Class Son {

	public function cry(Father $father){

		echo '小孩哭了';
		$father->baobao();
	}
}

class Father{

	public function baobao()
	{
		echo '抱小孩红衣红';
	}
}

class Mother{

	public function baobao()
	{
		echo '抱小孩红衣红';
	}
}

$xiaohai=new Son();

$xiaohai->cry(new Father());
//$xiaohai->cry(new Mother());


