<?php
class roomfile extends Eloquent{
	protected $table = "room_file";
	function add($data){
		return DB::table($this->table)->insertGetId($data);	
	}
	function del_roomid($idroom){
		return DB::table($this->table)->where('room_id',$idroom)->delete();
	}
}