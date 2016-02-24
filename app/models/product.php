<?php
class product extends Eloquent{
	protected $table = 'product';
	protected $primaryKey = 'id_product';
	function __construct(){

	}
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function edit($ids,$data){
		return DB::table($this->table)->where($this->primaryKey,$ids)->update($data);
	}
	function del($ids){
		return DB::table($this->table)->where($this->primaryKey,$ids)->delete();
	}
	function get_page(){
		return DB::table($this->table)->orderBy('id_product','DESC')->paginate(20);
	}
	function get_search($q){
		return DB::table($this->table)->where('name_product',$q)->paginate(20);
	}
	function get_name($name){
		return DB::table($this->table)->where('name_product',$name)->first();
	}
	function get_id($id){
		return product::find($id);
	}
	function featured(){
		return product::OrderBy('id_product','DESC')->take(4)->get();
	}
}