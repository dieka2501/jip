<?php
class adminController extends BaseController{
	function __construct(){
		$this->admin = new admin;
	}
	function get_login(){
		if(Input::has('email_login') && Input::has('password')){
			$username 					= Input::get('email_login');
			$password 					= md5(Input::get('password'));
			$get_data 					= $this->admin->get_username($username,$password);
			if(count($get_data)>0){
				Session::put('login',true);
				Session::put('email',$username);
				Session::put('role',$get_data->role);
				return Response::json(array('login'=>true,'alert'=>"Login success"));
			}else{
				return Response::json(array('login'=>false,'alert'=>"Username & Password does not exist"));
			}
		}else{
			return Response::json(array('login'=>false,'alert'=>"Username & Password is blank"));
		}
	}
	function logout(){
		Session::flush();
		return Redirect::to(Config::get('app.url').'public/admin');
	}

}