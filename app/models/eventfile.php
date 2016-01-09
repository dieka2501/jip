<?php
class eventfile extends Eloquent{
	protected $table = "event_file";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function delete_eventid($newsid){
		return DB::table($this->table)->where('event_id',$newsid)->delete();
	}
}