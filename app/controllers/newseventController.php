<?php
class newseventController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		$this->news = new news;
		$this->file = new newsfile;
		$this->category 	= new category;
		$this->cp 			= new categoryProduct;
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
		View::share('active','event');
	}
	function index(){
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.news.list');
	}
	function detail(){
		if(Input::has('id')){
			$id = Input::get('id');
			$get_news = $this->news->get_id($id);
			$get_file = $this->file->get_idnews($id);
			$view['news'] = $get_news;
			$view['file'] = $get_file;
			return View::make('front.newsdetail',$view);
		}else{
			return rediect::to('/news');
		}
	}
}