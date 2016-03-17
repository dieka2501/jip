<?php
class memberController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->category 	= new category;
		$this->customer 	= new customer;
		$this->order 		= new order;
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
	function index($id){
		// var_dump(Session::all());
		$getdata 						= $this->customer->get_id($id);
		$getorder 						= $this->order->get_email($getdata->customer_email);
		$view['customer_first_name'] 	= $getdata->customer_first_name;
		$view['customer_last_name'] 	= $getdata->customer_last_name;
		$view['customer_company'] 		= $getdata->customer_company;
		$view['customer_address'] 		= $getdata->customer_address;
		$view['customer_town'] 			= $getdata->customer_town;
		$view['customer_zip'] 			= $getdata->customer_zip;
		$view['customer_country']		= $getdata->customer_country;
		$view['customer_email']			= $getdata->customer_email;
		$view['customer_phone']			= $getdata->customer_phone;
		$view['customer_datebirth']		= $getdata->customer_datebirth;
		$view['ids'] 					= $id;
		$view['notip'] 					= Session::get('notip');
		$view['order'] 					= $getorder;
		$this->layout->menu 			= View::make('front.menu');
		$this->layout->content 			= View::make('front.member.index',$view);
	}
	function do_save(){
		$ids 					= Input::get('ids');
		$customer_first_name 	= Input::get('customer_first_name');
		$customer_last_name 	= Input::get('customer_last_name');
		$customer_company 		= Input::get('customer_company');
		$customer_address 		= Input::get('customer_address');
		$customer_town 			= Input::get('customer_town');
		$customer_country 		= Input::get('customer_country');
		$customer_email 		= Input::get('customer_email');
		$customer_phone 		= Input::get('customer_phone');
		$customer_datebirth		= Input::get('customer_datebirth');
		$customer_password		= Input::get('password');
		if($customer_password != ""){
			$save['customer_password'] = $customer_password;
		}
		$save['customer_first_name'] 	= $customer_first_name;
		$save['customer_last_name'] 	= $customer_last_name;
		$save['customer_company'] 		= $customer_company;
		$save['customer_address'] 		= $customer_address;
		$save['customer_town'] 			= $customer_town;
		$save['customer_country']		= $customer_country;
		$save['customer_email']			= $customer_email;
		$save['customer_phone']			= $customer_phone;
		$save['customer_datebirth']		= $customer_datebirth;
		$this->customer->edit($ids,$save);
		Session::flash('notip','<div class="alert alert-success">Profile telah diupdate</div>');
		return Redirect::to('/member/'.$ids);

	}

}