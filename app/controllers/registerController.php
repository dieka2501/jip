<?php
class registerController Extends BaseController{
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
		$view['email'] 				= Session::get('email');
		$view['first_name'] 		= Session::get('first_name');
		$view['last_name'] 			= Session::get('last_name');
		$view['last_name'] 			= Session::get('last_name');
		$view['date_birth'] 		= Session::get('date_birth');
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.register.page',$view);
	}
	function do_register(){
		if(Input::has('email') && Input::has('password') && Input::has('first_name') && Input::has('last_name')){
			$email 				= Input::get('email');
			$password			= Input::get('password');
			$repassword			= Input::get('repassword');
			$first_name			= Input::get('first_name');
			$last_name			= Input::get('last_name');
			$date_birth			= Input::get('date_birth');
			$key 				= substr(md5($email.date('YmdHis')), 3,5);
			$get_email 			= $this->customer->get_email($email);
			if(count($get_email) == 0){
				if($password == $repassword){
					$insert = array('customer_first_name'=>$first_name,
									'customer_last_name'=>$last_name,
									'customer_email'=>$email,
									'customer_password'=>md5($password),
									'customer_status'=>0,
									'customer_datebirth'=>'0000-00-00',
									'customer_key'=>$key,
									'created_at'=>date('Y-m-d H:i:s'));
					$ids = $this->customer->add($insert);
					if($ids > 0){
						Session::flash('notip','<div class="alert alert-success">Register success</div>');
						return Redirect::to('/login');	
					}else{
						Session::flash('first_name',$first_name);
						Session::flash('last_name',$last_name);
						Session::flash('notip','<div class="alert alert-danger">Register failed!</div>');
						return Redirect::to('/register');	
					}
				}else{
					Session::flash('email',$email);
					Session::flash('first_name',$first_name);
					Session::flash('last_name',$last_name);
					Session::flash('notip','<div class="alert alert-danger">Password must match!</div>');
					return Redirect::to('/register');
				}
			}else{
				Session::flash('email',$email);
				Session::flash('first_name',$first_name);
				Session::flash('last_name',$last_name);
				Session::flash('notip','<div class="alert alert-danger">Email has been registered</div>');
				return Redirect::to('/register');
			}
		}else{	
			Session::flash('email',$email);
			Session::flash('first_name',$first_name);
			Session::flash('last_name',$last_name);
			Session::flash('notip','<div class="alert alert-danger">All field require must be filled</div>');
			return Redirect::to('/register');
		}
	}
}