<?php
class memberController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->category 	= new category;
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
		var_dump(Session::all());
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.member.index');
	}

}