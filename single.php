<?php

//单例模式
class Single{


	public static $instance;

	private function __construct(){

		$link = mysqli_connect('localhost' , 'root' , '');
		return $link;	
	}

	public static function getIntance(){

		if(isset(self::$instance)){
			return self::$instance;
		}else{
			return self::$instance=new self();
		}	
	}
}
$obj1=Single::getIntance();
$obj2=Single::getIntance();

if($obj1===$obj2){
	echo 'yes';
}else{
	echo 'no';
}

