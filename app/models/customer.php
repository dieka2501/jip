<?php
class customer Extends Eloquent{
	protected $table 			= 'customer';
	protected $primaryKey 		= 'id_customer';
	function add($data){
		return customer::insertGetId($data);
	}
	function get_email($email){
		return customer::where('customer_email',$email)->first();
	}
}