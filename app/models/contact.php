<?php
class contact extends Eloquent{
	protected $table = "contact";
	protected $primaryKey = "id_contact";
	function add($data){
		return contact::insertGetId($data);
	}
	function get_page(){
		return contact::orderBy($this->primaryKey,'DESC')->paginate(20);
	}
	function get_id($id){
		return contact::find($id);
	}
	function edit($id,$data){
		return contact::where($this->primaryKey,$id)->update($data);
	}
}