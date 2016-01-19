<?php
class checkoutController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->cart 		= new cart;
		$this->order 		= new order;
		$this->od 			= new orderDetail;
		$this->category 	= new category;
		$arr_child 			= array();
		$arr_cat 			= array();
		$get_parent 		= $this->category->get_parent();
		foreach ($get_parent as $categories) {
			$arr_cat[$categories->id_category] = $categories->category_name;
			$get_child 		= $this->category->get_idparent($categories->id_category);
			
			foreach ($get_child as $childs) {
				$arr_child[$categories->id_category][$childs->id_category] = $childs->category_name;
			}
		}

		View::share('menucat',$arr_cat);
		View::share('childcat',$arr_child);
		View::share('active','product');
	}
	function index(){
		$token 					= Session::get('_token');
		$get_cart 			 	= $this->cart->get_session($token);
		$view['cart'] 			= $get_cart;
		$view['url'] 			= Config::get('app.url')."public/checkout/do";
		$this->layout->menu 	= View::make('front.menu');
		$this->layout->content 	= View::make('front.checkout.page',$view);
	}
	function do_checkout(){
		if(Input::has('first_name') && Input::has('last_name') && Input::has('address')){
			$first_name 		= Input::get('first_name');
			$last_name	 		= Input::get('last_name');
			$company	 		= Input::get('company');
			$address	 		= Input::get('address');
			$town		 		= Input::get('town');
			$zip		 		= Input::get('zip');
			$state		 		= Input::get('state');
			$email		 		= Input::get('email');
			$total_order 		= Input::get('total_order');
			$phone_number 		= Input::get('phone_number');
			$token 				= Session::get('_token');
			$get_cart 			= $this->cart->get_session($token);
			$insorder['order_first_name'] 		= $first_name;
			$insorder['order_last_name'] 		= $last_name;
			$insorder['order_company'] 			= $company;
			$insorder['order_address'] 			= $address;
			$insorder['order_town'] 			= $town;
			$insorder['order_zip']	 			= $zip;
			$insorder['order_country']	 		= $state;
			$insorder['order_email']	 		= $email;
			$insorder['order_phone']	 		= $phone_number;
			$insorder['order_total']	 		= $total_order;
			$insorder['created_at']		 		= date('Y-m-d H:i:s');
			$idorder = $this->order->add($insorder);
			foreach ($get_cart as $carts) {
				$detailorder['order_id'] 		= $idorder;
				$detailorder['product_id'] 		= $carts->product_id;
				$detailorder['detail_qty'] 		= $carts->qty;
				$detailorder['product_price'] 	= $carts->price_product;
				$detailorder['created_at'] 		= date('Y-m-d H:i:s');
				$this->od->add($detailorder);
			}
			$view['noorder'] = $idorder;
			$this->layout->menu 	= View::make('front.menu');
			$this->layout->content 	= View::make('front.checkout.result',$view);
			$this->cart->delete_token($token);	
		}else{
			Redirect::to('/cart');
		}
		
	}
}