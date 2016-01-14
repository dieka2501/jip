<?php
class order Extends Eloquent{
	protected $table 		= "order";
	protected $primaryKey 	= "id_order";
	function add($data){
		return DB::table($this->table)->InsertGetId($data);
	}
}