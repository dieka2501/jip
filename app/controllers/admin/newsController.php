<?php
class newsController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		$this->news = new news;
		$this->file = new newsfile;
	}
	function index(){
		View::share('big_title','News');
		if(Input::has('q')){
			$q 			= Input::get('q');
			$get_data 	= $this->news->get_search($q);
		}else{
			$q 			= "";
			$get_data 	= $this->news->get_page();
		}
		$view['q']				= $q;
		$view['get_data']		= $get_data;
		$view['notip']			= Session::get('notip');
		$this->layout->content 	= View::make('admin.news_events.table',$view); 
	}

	function create(){
		View::share('big_title','Create News');
		$view['title'] 			= Session::get('title');
		$view['content'] 		= Session::get('content');
		$view['ids']	 		= Session::get('ids');
		$view['status']	 		= Session::get('status');
		$view['type']	 		= Session::get('type');
		$view['notip']	 		= Session::get('notip');
		$view['url']			= Config::get('app.url').'public/admin/news/create';
		$this->layout->content 	= View::make('admin.news_events.form',$view); 	
	}
	function do_create(){
		$path 		= base_path().'/aset/upload/';
		if(Input::has('title') && Input::has('content')){
			$title 		= Input::get('title');
			$content 	= Input::get('content');
			$status 	= Input::get('status');
			$type 		= Input::get('type');
			$get_title 	= $this->news->get_title($title);
			if(count($get_title) == 0){
				
				
				$data['news_title'] 	= $title;
				$data['news_type'] 		= $type;
				$data['news_content'] 	= $content;
				$data['news_author'] 	= Session::get('email');
				$data['news_status'] 	= $status;
				// $data['date_news'] 		= date('Y-m-d H:i:s');
				$data['date_insert']	= date('Y-m-d H:i:s');	
				$idinsert =  $this->news->add($data);
				if($idinsert > 0){
					if(Input::hasFile('image')){
						$image 		= Input::file('image');
						$count 		= count($image);
						// var_dump($count);die;
						// var_dump($image[0]->getClientOriginalName());die();
						// foreach ($image as $images) {
						// if(!is_null($image[0])){
						// 	$featured['image'] 	= $image[0]->getClientOriginalName();
						// 	$this->news->edit($idinsert,$featured);	
						// }
						for($i=0;$count > $i;$i++){
							if(!is_null($image[$i])){
								$filename 	= $image[$i]->getClientOriginalName();
								$image[$i]->move($path,$filename);
								$file['news_id'] 		= $idinsert;
								$file['file'] 	 		= $filename;
								$file['created_at'] 	= date('Y-m-d H:i:s');
								$this->file->add($file);		
							}
							
						}
						// echo "true";
					}else{
						$filename = '';
						// echo "false";
					}
					Session::flash('notip','<div class="alert alert-success" role="alert">Insert Success</div>');
					return Redirect::to('admin/news');	
				}else{
					Session::flash('title',$title);
					Session::flash('content',$content);
					Session::flash('status',$status);
					Session::flash('type',$type);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Title & Content Cannot Leave blank</div>');
					return Redirect::to('admin/news/create');
				}	
			}else{
				Session::flash('title',$title);
				Session::flash('content',$content);
				Session::flash('status',$status);
				Session::flash('type',$type);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Title Exists</div>');
				return Redirect::to('admin/news/create');
			}
		}else{
			Session::flash('title',$title);
			Session::flash('content',$content);
			Session::flash('status',$status);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Title & Content Cannot Leave blank</div>');
			return Redirect::to('admin/news/create');
		}
		

	}

	function edit($id){
		View::share('big_title','Create News');
		$get_data 				= $this->news->get_id($id);
		$view['title'] 			= $get_data->title;
		$view['content'] 		= $get_data->content;
		$view['ids']	 		= $id;
		$view['status']	 		= $get_data->news_status;
		$view['status']	 		= $get_data->news_type;
		$view['notip']	 		= Session::get('notip');
		$view['url']			= Config::get('app.url').'public/admin/news/edit';
		$this->layout->content 	= View::make('admin.news.form',$view); 	
	}

	function do_edit(){
		$path 		= base_path().'/aset/upload';
		if(Input::has('title') && Input::has('content')){
			$title 		= Input::get('title');
			$content 	= Input::get('content');
			$status 	= Input::get('status');
			$ids 		= Input::get('ids');
			if(true){
				if(Input::hasFile('image')){
					$this->file->delete_newsid($ids);
					$image 		= Input::file('image');
					$count 		= count($image);
					// var_dump($image[0]->getClientOriginalName());die();
					// foreach ($image as $images) {
					if(!is_null($image[0])){
						$featured['image'] 	= $image[0]->getClientOriginalName();
						$this->news->edit($ids,$featured);	
					}
					for($i=0;$count > $i;$i++){
						if(!is_null($image[$i])){
							$filename 	= $image[$i]->getClientOriginalName();
							$image[$i]->move($path,$filename);
							$file['news_id'] 		= $ids;
							$file['file'] 	 		= $filename;
							$file['date_insert'] 	= date('Y-m-d H:i:s');
							$this->file->add($file);		
						}
						
					}
					// $image 		= Input::file('image');
					// $filename 	= $image->getClientOriginalName();
					// $image->move($path,$filename);
					// $data['image'] 			= $filename;
				}else{
					$filename = '';
				}
				$data['title'] 			= $title;	
				$data['content'] 		= $content;
				$data['news_status'] 	= $status;
				$data['date_update']	= date('Y-m-d H:i:s');	
				
				if($this->news->edit($ids,$data)){
					Session::flash('notip','<div class="alert alert-success" role="alert">Update Success</div>');
					return Redirect::to('admin/news');	
				}else{
					Session::flash('title',$title);
					Session::flash('content',$content);
					Session::flash('status',$status);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Title & Content Cannot Leave blank</div>');
					return Redirect::to('admin/news/create');
				}	
			}else{
				Session::flash('title',$title);
				Session::flash('content',$content);
				Session::flash('status',$status);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Title Exists</div>');
				return Redirect::to('admin/news/create');
			}
		}else{
			Session::flash('title',$title);
			Session::flash('content',$content);
			Session::flash('status',$status);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Title & Content Cannot Leave blank</div>');
			return Redirect::to('admin/news/create');
		}
		

	}

	function del($id){
			if($this->news->del($id)){
				$this->file->delete_newsid($id);
				Session::flash('notip','<div class="alert alert-success" role="alert">Delete Success</div>');
				return Redirect::to('admin/news');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Delete failed</div>');
				return Redirect::to('admin/news');
			}
	}
}