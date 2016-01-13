<?php
class checkoutController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
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
		$this->layout->menu 	= View::make('front.menu');
		$this->layout->content 	= View::make('front.checkout.page');
	}
}