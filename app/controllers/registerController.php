<?php
class registerController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->category 	= new category;
		$this->cp 			= new categoryProduct;
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
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.register.page');
	}
	function do_register(){
		if(Input::has('email') && Input::has('password') && Input::has('first_name') && Input::has('last_name')){
			$email 				= Input::get('email');
			$password			= Input::get('password');
			$repassword			= Input::get('repassword');
			$repassword			= Input::get('repassword');
			$first_name			= Input::get('first_name');
			$last_name			= Input::get('last_name');
			$company			= Input::get('company');
			$address			= Input::get('address');
			$town				= Input::get('town');
			$zip				= Input::get('zip');
			$country			= Input::get('country');
			$phone				= Input::get('phone');
			$get_email 			= $this->
			// if(count()){}
		}else{	
			Session::flash('notip','<div class="alert alert-danger">All field require must be filled</div>');
			return Re
		}
	}
}