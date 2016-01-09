<?php
class communityController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		$this->category 	= new category;
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
		View::share('active','community');
	}
	function index(){
		$this->layout->menu 	= View::make('front.menu');
		$this->layout->content  = View::make('front.community.community');
	}
}