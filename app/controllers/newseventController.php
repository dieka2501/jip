<?php
class newseventController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		$this->news = new news;
		$this->file = new newsfile;
		$this->category 	= new category;
		$this->cp 			= new categoryProduct;
		$arr_child 			= array();
		$arr_cat 			= array();
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
		if(Input::has('cari')){
			$cari 		= Input::get('cari');
			$get_news 	= $this->news->get_search($cari);
		}else{
			$cari 		= "";
			$get_news 	= $this->news->get_page_front();	
		}
		
		$filesnews 			= [];
		$cacah 				= count($get_news);
		foreach ($get_news as $news) {
			$getfile 		= $this->file->get_idnews_first($news->id_news);
			if(count($getfile)>0){
				$filesnews[$news->id_news] = $getfile->file;	
			}
			
		}
		$page 						= (Input::has('page'))?Input::get('page'):1;
		$view['news'] 				= $get_news;
		$view['newsfile']			= $filesnews;
		$view['page'] 				= $page;
		$view['cari'] 				= $cari;
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.news.list',$view);
	}
	function detail($id){
		if(isset($id)){
			$get_news = $this->news->get_id($id);
			$get_file = $this->file->get_idnews($id);
			$view['news'] = $get_news;
			$view['file'] = $get_file;
			$this->layout->menu 		= View::make('front.menu');
			$this->layout->content 		= View::make('front.news.detail',$view);
		}else{
			return rediect::to('/news');
		}
	}
}