<?php
class contact extends Eloquent{
	protected $table = "contact";
	protected $primaryKey = "id_contact";
	function add($data){
		return contact::insertGetId($data);
	}
	function get_page(){
		return contact::orderId($this->primaryKey,'DESC')->paginate(20);
	}
}