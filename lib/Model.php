<?php

class Model{
	protected $table;
	protected $primaryKey = "id";

	public static function find($id){
		$model = new static();

		$sql = "select * from ".$model->table." where ".$model->primaryKey." = id";
		$params = ["id" => $id];
		$result = DB::query($sql);

		foreach ($result as $key => $value) {
			$model->__set($key,$value);
		}

		return $model;
	}

	public static function all(){
		$model = new static();

		$sql = "select * from ".$model->table;
		$result = DB::query($sql);

		return $result;

	}


}

 ?>
