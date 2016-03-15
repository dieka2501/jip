<?php
class loginController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->category 	= new category;
		$this->customer 	= new customer;
		$get_parent 		= $this->category->get_parent();
		$arr_child 			= array();
		$arr_cat 			= array();
		foreach ($get_parent as $categories) {
			$arr_cat[$categories->id_category] = $categories->category_name;
			$get_child 		= $this->category->get_idparent($categories->id_category);
			
			foreach ($get_child as $childs) {
				$arr_child[$categories->id_category][$childs->id_category] = $childs->category_name;
			}
		}

		View::share('menucat',$arr_cat);
		View::share('childcat',$arr_child);
		View::share('active','');
	}
	function index(){
		$view['notip'] 				= Session::get('notip');
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.login.page',$view);
	}
	function do_login(){
		$email 			= Input::get('email');
		$password 		= Input::get('password');
		$getlogin 		= $this->customer->get_login($email,md5($password));
		if(count($getlogin) > 0){
			Session::put('login',true);
			Session::put('id',$getlogin->id_customer);
			Session::put('first_name',$getlogin->customer_first_name);
			Session::put('last_name',$getlogin->customer_last_name);
			Session::put('company',$getlogin->customer_company);
			Session::put('address',$getlogin->customer_address);
			Session::put('email',$getlogin->customer_email);
			Session::put('town',$getlogin->customer_town);
			Session::put('zip',$getlogin->customer_zip);
			Session::put('country',$getlogin->customer_country);
			Session::put('phone',$getlogin->customer_phone);
			Session::flash('notip','<div class="alert alert-success">Login success</div>');
			return Redirect::to('/');
		}else{
			Session::put('notip','<div class="alert alert-danger">Email or password not found</div>');
			return Redirect::to('/login');
		}

	}
	function do_logout(){
		Session::flush();
		return Redirect::to('/');
	}
}