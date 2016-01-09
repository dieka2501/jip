<?php
class brand Extends Eloquent{
	protected $table = 'brand';

	function get_all(){
		return DB::table($this->table)->get();
	}
	function get_page(){
		return DB::table($this->table)->paginate(20);
	}
	function get_search($cari){
		return DB::table($this->table)->where('brand_name','like',$cari)->paginate(20);
	}
	function get_parent(){
		return DB::table($this->table)->where('brand_parent',0)->get();
	}
	function get_name($name){
		return DB::table($this->table)->where('brand_name',$name)->first();
	}
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_id($id){
		return DB::table($this->table)->where('id_brand',$id)->first();
	}
	function edit($id,$data){
		return DB::table($this->table)->where('id_brand',$id)->update($data);
	}
	function del($id){
		return DB::table($this->table)->where('id_brand',$id)->delete();
	}
}