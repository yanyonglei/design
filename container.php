<?php

class Container{

	public static $resgister=[];
	public static function bind($name,closure $closure){

		if(!isset(self::$resgister[$name])){
			self::$resgister[$name]=$closure;
		}
	}

	public static function make($name){
		$func=self::$resgister[$name];
		return $func();
	}
}

class Person {
	public function say(){
		echo '我在说话';
	}
}
Container::bind('person',function(){
	return new Person();
});

/*Container::bind('person',new Person());*/

$obj=Container::make('person');
$obj->say();
