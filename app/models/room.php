<?php
class room Extends Eloquent{
	protected $table = 'room';
	protected $primaryKey = "id_room";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_title($title){
		return DB::table($this->table)->where('name_room','like',$title)->first();
	}
	function get_page(){
		return DB::table($this->table)->orderBy('id_room','DESC')->paginate(20);
	}
	function get_search($cari){
		return DB::table($this->table)->where('name_room','like','%'.$cari.'%')->orderBy('id_room','DESC')->paginate(20);
	}
	function get_id($id){
		return room::find($id);
	}
	function edit($id,$data){
		return DB::table($this->table)->where('id_room',$id)->update($data);
	}
	function del($id){
		$room = room::find($id);
		return $room->delete();
	}
}