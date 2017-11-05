<?php
interface Observable{

	//添加观察者
	public function attach($observer);
	//移出观察者
	public function detach($observer);
	//消息提醒
	public function notify();
}

class Box implements Observable{

	public $observable=[];

	public $price=10;

	public function attach($observer){
		if(!in_array($observer, $this->observable)){
			$this->observable[]=$observer;
		}
	}

	public function detach($observer){

		foreach ($this->observable as $key => $value) {
			if($value==$observer){
				unset($this->observable[$key]);
			}
		}
	}

	public function notify(){
		foreach ($this->observable as $observer) {
			$observer->do($this);
		}
	}


	public function changePrice($price){
		$this->price=$price;
		$this->notify();
	}
}


interface Observer{
	public function do($observable);
}

class Poor implements Observer{

	public function do($observable){

		if ($observable->price > 20) {
			echo '太贵了吃不起我是穷人<br />';
		} else {
			echo '太贵了但是该吃还是要吃的<br />';
		}
	}
}


class Rich implements Observer
{
	public function do($observable)
	{
		if ($observable->price > 20) {
			echo '凑合着吃吧还行不算贵<br />';
		} else {
			echo '太便宜了了垃圾<br />';
		}
	}
}




$boss = new Box();
$rich = new Rich();
$boss->attach($rich);

$poor = new Poor();
$boss->attach($poor);

$boss->changePrice(20);




