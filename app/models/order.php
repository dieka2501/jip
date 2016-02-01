<?php
class order Extends Eloquent{
	protected $table 		= "order";
	protected $primaryKey 	= "id_order";
	function add($data){
		return DB::table($this->table)->InsertGetId($data);
	}
	function get_page(){
		return order::orderBy('id_order','DESC')->paginate(20);
	}
	function get_id($id){
		return order::find($id);
	}
	function edit($id,$data){
		return order::where('id_order',$id)->update($data);	
	}
	function get_ten(){
		return order::orderBy('id_order','DESC')->take(10)->get();
	}
}