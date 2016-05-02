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
	function get_login($email,$password){
		return customer::where('customer_status',1)->where('customer_email',$email)->where('customer_password',$password)->first();
	}
	function get_login_temp($email,$password){
		return customer::where('customer_email',$email)->where('customer_password',$password)->first();
	}
	function get_id($id){
		return customer::find($id);
	}
	function edit($id,$data){
		return customer::where($this->primaryKey,$id)->update($data);
	}
}