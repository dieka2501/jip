<?php
class dashboardController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->order = new order;
	}
	function index(){
		// $this->layout->title 	= "Dashboard";
		View::share('big_title','Dashboard');	
		$get_order 				= $this->order->get_ten();
		// var_dump($get_order);
		$view['order']			= $get_order;
		$this->layout->content 	= View::make('admin.dashboard.index',$view); 
	}
}