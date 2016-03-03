<?php
class admin extends Eloquent{
	protected $table = 'admin';
	function get_username($username,$password){
		return DB::table($this->table)->where('username',$username)->where('password',$password)->first();
	}
}