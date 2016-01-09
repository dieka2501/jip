<?php
class cartController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->cart 		= new cart;
		$this->category 	= new category;
		$get_parent 		= $this->category->get_parent();
		foreach ($get_parent as $categories) {
			$arr_cat[$categories->id_category] = $categories->category_name;
		}
		$this->arr_menu_cat = $arr_cat;
		View::share('menucat',$arr_cat);
		View::share('active','product');
	}
	function index(){
		$token 					= Session::get('_token');
		$getcart 				= $this->cart->get_session($token);
		$view['cart'] 			= $getcart;
		$this->layout->menu 	= View::make('front.menu');
		$this->layout->content 	= View::make('front.cart.page',$view);
	}
	function do_add(){
		if(Input::has('idproduct')){
			$idproduct  			= Input::get('idproduct');
			$session 				= Session::get('_token');
			$cart['product_id'] 	= $idproduct;
			$cart['qty'] 			= '1';
			$cart['session'] 		= $session;
			$cart['created_at'] 	= date('Y-m-d H:i:s');
			$ids = $this->cart->add($cart);
			if($ids > 0){
				return Redirect::to('/cart');	
			}else{
				//Session::flash(''); Buat class alert
				return Redirect::to('/product');	
			}
		}else{
			//Session::flash(''); Buat class alert
			return Redirect::to('/product');
		}
	}
	function do_delete(){
		$ids 	= Input::get('id');
		$this->cart->del($ids);
		return Redirect::to('/cart');
	}
	function do_update(){

		$token 		= Session::get('_token');
		// var_dump($token);die;
		$idproduct  = Input::get('idproduct');
		$qtycart  	= Input::get('qtycart');
		$count 		= count($qtycart);
		$this->cart->delete_token($token);
		for ($i=0; $i < $count; $i++) { 
			$updatecart['product_id']     = $idproduct[$i];
			$updatecart['qty'] 		  	  = $qtycart[$i];
			$updatecart['session'] 	  	  = $token;
			$updatecart['created_at'] 	  = date('Y-m-d H:i:s');
			$updatecart['updated_at'] 	  = date('Y-m-d H:i:s');
			$this->cart->add($updatecart);
		}
		return Redirect::to('/cart');
	}
}