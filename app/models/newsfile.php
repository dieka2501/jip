<?php
class newsfile extends Eloquent{
	protected $table = "news_file";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function delete_newsid($newsid){
		return DB::table($this->table)->where('news_id',$newsid)->delete();
	}
	function get_idnews($idnews){
		return DB::table($this->table)->where('news_id',$idnews)->get();
	}
	
}