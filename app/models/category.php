<?php
class category Extends Eloquent{
	protected $table = 'category';

	function get_all(){
		return DB::table($this->table)->get();
	}
	function get_page(){
		return DB::table($this->table)->orderBy('id_category','DESC')->paginate(20);
	}
	function get_search($cari){
		return DB::table($this->table)->where('category_name','like',$cari)->paginate(20);
	}
	function get_parent(){
		return DB::table($this->table)->where('category_parent',0)->get();
	}
	function get_parent_edit($ids){
		return DB::table($this->table)->where('category_parent',0)->where('id_category','!=',$ids)->get();
	}
	function get_child(){
		return DB::table($this->table)->where('category_parent','!=',0)->get();
	}
	function get_idparent($id){
		return DB::table($this->table)->where('category_parent','=',$id)->get();
	}
	function get_name($name){
		return DB::table($this->table)->where('category_name',$name)->first();
	}
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_id($id){
		return DB::table($this->table)->where('id_category',$id)->first();
	}
	function edit($id,$data){
		return DB::table($this->table)->where('id_category',$id)->update($data);
	}
	function del($id){
		return DB::table($this->table)->where('id_category',$id)->delete();
	}
}