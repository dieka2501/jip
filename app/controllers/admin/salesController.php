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
}