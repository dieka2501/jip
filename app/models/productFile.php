<?php
class productFile Extends Eloquent{
	protected $table 		= "product_image";
	protected $primaryKey 	= "id_pi";
	function add($data){
		return productFile::insertGetId($data);
	}
	function get_idproduct($idproduct){
		return productFile::where('product_id',$idproduct)->get();
	}
	function del($id){
		$file = productFile::find($id);
		return $file->delete();
	}
}