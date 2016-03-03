<?php
class banner Extends Eloquent{
	protected $table = 'banner';
	protected $primaryKey = "idbanner";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_title($title){
		return DB::table($this->table)->where('banner_title',$title)->first();
	}
	function get_page(){
		return DB::table($this->table)->orderBy('idbanner',"DESC")->paginate(20);
	}
	function get_page_front(){
		return DB::table($this->table)->orderBy('idbanner',"DESC")->paginate(6);
	}
	function get_search($cari){
		return DB::table($this->table)->where('banner_title','like','%'.$cari.'%')->orderBy('idbanner',"DESC")->paginate(20);
	}
	function get_id($id){
		return banner::find($id);
	}
	function edit($id,$data){
		return DB::table($this->table)->where('idbanner',$id)->update($data);
	}
	function del($id){
		$banner = banner::find($id);
		return $banner->delete();
	}
	function get_front(){
		return DB::table($this->table)->orderBy('idbanner',"DESC")->paginate(6);
	}
	function get_front_banner(){
		return DB::table($this->table)->orderBy('idbanner',"DESC")->paginate(9);
	}
	function get_last(){
		return banner::orderBy('idbanner','DESC')->first();
	}
	function get_last2(){
		return banner::orderBy('idbanner','DESC')->take(2)->get();
	}
	function get_all(){
		return banner::all();
	}
}