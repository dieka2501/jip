<?php
class categoryProduct Extends Eloquent{
	protected $table 		= "product_category";
	protected $primaryKey 	= "id_pc";
	protected $fillable 	= ['category_id,product_id'];
	function add($data){
		// return categoryProduct::create($data);
		return DB::table($this->table)->InsertGetId($data);
	}
	function get_idproduct($id_product){
		return DB::table($this->table)->where('product_id',$id_product)
				->join('category',$this->table.'.category_id','=','category.id_category')
				->join('product',$this->table.'.product_id','=','product.id_product')
				->get();
	}
	function delete_idproduct($id_product){
		return DB::table($this->table)->where('product_id',$id_product)->delete();
	}
	function get_idcat($idcat){
		return categoryProduct::where($this->table.'.category_id',$idcat)
				->join('category',$this->table.'.category_id','=','category.id_category')
				->join('product',$this->table.'.product_id','=','product.id_product')
				->paginate(20);
	}
	function get_idcat_cari($idcat,$cari){
		return categoryProduct::where($this->table.'.category_id',$idcat)
				->join('category',$this->table.'.category_id','=','category.id_category')
				->join('product',$this->table.'.product_id','=','product.id_product')
				->where('product.name_product','like','%'.$cari.'%')
				->paginate(20);
	}
}