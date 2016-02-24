<?php

class HomeController extends BaseController {
	protected $layout = 'front.template';
	function __construct(){
		$this->brand 		= new brand;
		$this->category 	= new category;
		$this->news 		= new news;
		$this->file 		= new newsfile;
		$this->product 		= new product;
		$arr_child 			= array();
		$arr_cat 			= array();
		$get_parent 		= $this->category->get_parent();
		// $count_parent 		= count($get_parent/2);
		foreach ($get_parent as $categories) {
			$arr_cat[$categories->id_category] = $categories->category_name;
			$get_child 		= $this->category->get_idparent($categories->id_category);
			
			foreach ($get_child as $childs) {
				$arr_child[$categories->id_category][$childs->id_category] = $childs->category_name;
			}
		}

		View::share('menucat',$arr_cat);
		View::share('childcat',$arr_child);
		View::share('active','dashboard');
	}
	// protected $layout = 'front.index';
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	Public function index(){
		
		$get_news 			= $this->news->get_last2();
		$get_product 		= $this->product->featured();
		$filesnews 			= [];

		foreach ($get_news as $news) {
			$getfile 		= $this->file->get_idnews_first($news->id_news);
			if(count($getfile) > 0){
				$filesnews[$news->id_news] = $getfile;	
			}
			
		}
		$view['product'] 			= $get_product;
		$view['news'] 				= $get_news;
		$view['newsfile']			= $filesnews;
		$view['brand'] 				= $this->brand->get();
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content  	= View::make('front.home.page',$view);
	}

}
