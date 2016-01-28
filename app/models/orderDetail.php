<?php
class orderDetail Extends Eloquent{
	protected $table 		= "order_detail";
	protected $primaryKey 	= "id_order_detail";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_idorder($id){
		return orderDetail::join('product','order_detail.product_id','=','product.id_product')
		->where('order_detail.order_id',$id)->get();
	}
}