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
		$cart = cart::find($id);
		return $cart->delete();
	}
	function delete_token($token){
		return DB::table($this->table)->where('session',$token)->delete();
	}
}