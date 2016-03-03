<?php
class roomfasilities Extends Eloquent{
	protected $table = "room_facilities";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_idroom($idroom){
		return DB::table($this->table)->where('room_id',$idroom)->get();
	}
	function del_idroom($idroom){
		return DB::table($this->table)->where('room_id',$idroom)->delete();
	}
}