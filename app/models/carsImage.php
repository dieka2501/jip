<?php
class carsImage Extends Eloquent{
	protected $table 		= "cars_image";
	protected $primaryKey   = "id_cars_image";
	function add($data){
		return carsImage::insertGetId($data);
	}
	function get_idcars($idcars){
		return carsImage::where('cars_id',$idcars)->get();
	}
}