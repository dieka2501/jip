<?php
class paymentController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/jakarta');
		$this->category 	= new category;
		$this->order 		= new order;
		$this->payment 		= new payment;
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
		View::share('active','payment');
		
	}
	function index(){
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.payment.index');
	}
	function json_order(){
		$id_order 		= Input::get('id_order');
		$get_data 		= $this->order->get_id_order($id_order);
		if(count($get_data) > 0){
			$alert 	= 'Data diketemukan';
			$data  	= $get_data;
			$status = true;
		}else{
			$alert 	= 'Order no '.$id_order.' tidak diketemukan atau sudah dibayar';
			$data  	= null;
			$status = false;
		}
		return Response::json(['status'=>$status,'data'=>$data,'alert'=>$alert]);
	}

}