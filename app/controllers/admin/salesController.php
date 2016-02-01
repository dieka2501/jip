<?php
class salesController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		$this->order = new order;
		$this->od 	= new orderDetail;
	}
	function index(){
		View::share('big_title','Sales Order');	
		$get_order 		= $this->order->get_page();
		$view['order'] 	= $get_order;
		
		$this->layout->content 	= View::make('admin.sales.table',$view);
	}
	function detail($id){
		View::share('big_title','Detail Sales Order');
		$get_order 			= $this->order->get_id($id);
		$get_detail 		= $this->od->get_idorder($id);
		$view['order'] 		= $get_order;
		$view['detail']		= $get_detail;
		$this->layout->content = View::make('admin.sales.form',$view);
	}
	function change_status(){
		$status 				= Input::get('status_order');
		$ids 					= Input::get('id_order');
		$update['order_status'] = $status;
		if($this->order->edit($ids,$update)){
			$result = ['status'=>true];
		}else{
			$result = ['status'=>false];
		}
		return Response::json($result);

	}
}