<?php
class orderDetail Extends Eloquent{
	protected $table 		= "order_detail";
	protected $primaryKey 	= "id_order_detail";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
}