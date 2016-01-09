<?php
class dashboardController Extends BaseController{
	protected $layout = "admin.template";
	function index(){
		// $this->layout->title 	= "Dashboard";
		View::share('big_title','Dashboard');	
		$this->layout->content 	= View::make('admin.dashboard.index'); 
	}
}