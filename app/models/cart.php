<?php
Class cart extends Eloquent{
	protected $table = 'cart';
	protected $primaryKey = 'id_cart';
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_session($sess){
		return DB::table($this->table)
			->join('product',$this->table.'.product_id','=','product.id_product')
			->join('brand','product.brand_id','=','brand.id_brand')
			->where($this->table.'.session',$sess)
			->get();
	}
	function del($id){
		return cart::where('id_cart',$id)->delete();
	}
	function delete_token($token){
		return DB::table($this->table)->where('session',$token)->delete();
	}
}