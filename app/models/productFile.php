<?php
class productFile Extends Eloquent{
	protected $table 		= "product_image";
	protected $primaryKey 	= "id_pi";
	function add($data){
		return productFile::insertGetId($data);
	}
}