<?php
class payment extends Eloquent{
	protected $table 		= 'payment';
	protected $primaryKey 	= 'id_payment';
	function add($data){
		return payment::insertGetId($data);
	}
}