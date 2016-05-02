<?php
class cars Extends Eloquent{
	protected $table = 'cars';
	protected $primaryKey = 'id_cars';
	function add($data){
		return cars::insertGetId($data);
	}
	function edit($id,$data){
		return cars::where($this->primaryKey,$id)->update($data);
	}
	function del($id){
		return cars::where($this->primaryKey,$id)->delete();
	}
	function get_all(){
		return cars::all();
	}
	function get_page(){
		return cars::orderBy($this->primaryKey,'DESC')->paginate(20);
	}
	function get_id($id){
		return cars::find($id);
	}
	function get_search($cari){
		return cars::where('cars_name','like','%'.$cari.'%')->paginate(20);
	}
	function get_name($name){
		return cars::where('cars_name',$name)->first();
	}
	function get_new_page(){
		return cars::where('cars_category',0)->orderBy('id_cars','DESC')->paginate(20);
	}
	function get_new_page_search($cari){
		return cars::where('cars_category',0)->where('cars_name','like','%'.$cari.'%')->orderBy('id_cars','DESC')->paginate(20);
	}
	function get_used_page(){
		return cars::where('cars_category',1)->orderBy('id_cars','DESC')->paginate(20);
	}
	function get_used_page_search($cari){
		return cars::where('cars_category',1)->where('cars_name','like','%'.$cari.'%')->orderBy('id_cars','DESC')->paginate(20);
	}
}