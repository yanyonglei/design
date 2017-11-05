<?php

//适配器设计模式

//解决类似功能使用不一致的方法

class MysqlDb{
	public function connect(){
		echo '我是mysql数据库的链接方法';
	}
	public function select(){
		echo '我是mysql的查询方法';
	}
}


class Sqllite{

	public function find(){

		echo '我是sqlite的查询方法';
	}
}

class oracle {

	public function init(){
		echo 'oracle 的初始化方法';
	}

	public function connect(){
		echo '我是oracle的链接方法';
	}

	public function prev(){

		echo '我是oracle的预处理方法';
	}

	public function select(){
		echo '我是oracle的查询方法';
	}
}

interface Db{

	public function select();
	public function connect();
}

class MysqlAdapter extends MysqlDb implements Db{

	public function connect(){
		parent::connect();
	}

	public function select(){

		parent::select();
	}
}

class SqlliteAdapter extends Sqllite implements Db{
	public function connect(){

	}

	public function select(){

		parent::find();
	}
}


class OracleAdapter extends Oracle implements Db{

	public function connect(){
		parent::init();
		parent::connect();
	}
	public function select(){
		parent::pre();
		parent::select();
	}
}
define("DB_TYPE","Mysql");

$dbtype=DB_TYPE.'Adapter';
$db=new $dbtype();
$db->select();
