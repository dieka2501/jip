<?php
class bannerController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		$this->banner = new banner;
		
	}
	function index(){
		View::share('big_title','Banner');
		if(Input::has('q')){
			$q 			= Input::get('q');
			$get_data 	= $this->banner->get_search($q);
		}else{
			$q 			= "";
			$get_data 	= $this->banner->get_page();
		}
		$view['q']				= $q;
		$view['get_data']		= $get_data;
		$view['notip']			= Session::get('notip');
		$this->layout->content 	= View::make('admin.banner.table',$view); 
	}

	function create(){
		View::share('big_title','Create Banner');
		$view['title'] 			= Session::get('title');
		$view['action']			= "create";
		$view['content'] 		= Session::get('content');
		$view['ids']	 		= Session::get('ids');
		$view['link']	 		= Session::get('link');
		$view['notip']	 		= Session::get('notip');
		$view['url']			= Config::get('app.url').'public/admin/banner/create';
		$this->layout->content 	= View::make('admin.banner.form',$view); 	
	}
	function do_create(){
		$path 		= base_path().'/aset/upload/';
		if(Input::hasFile('image')){
			$content 		= Input::get('content');
			$link 			= Input::get('link');
			$image 			= Input::file('image');
			$filename 		= $image->getClientOriginalName();
			if($image->move($path,$filename)){
				$data['banner_image'] 		= $filename;
				$data['banner_link'] 		= $link;
				$data['banner_content'] 	= $content;
				$data['created_at']			= date('Y-m-d H:i:s');	
				$idinsert =  $this->banner->add($data);
				if($idinsert > 0){
					Session::flash('notip','<div class="alert alert-success" role="alert">Banner Created</div>');
					return Redirect::to('admin/banner');	
				}else{
					Session::flash('notip','<div class="alert alert-danger" role="alert">Created Banner Failed</div>');
					return Redirect::to('admin/banner/create');
				}
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Image Not Uploaded</div>');
				return Redirect::to('admin/banner/create');
			}
							  
		
		}else{
			
			Session::flash('notip','<div class="alert alert-danger" role="alert">Image must choosed</div>');
			return Redirect::to('admin/banner/create');
		}
		

	}

	function edit($id){
		View::share('big_title','Edit banner');
		$get_data 				= $this->banner->get_id($id);
		$view['action']			= "edit";
		$view['content'] 		= $get_data->banner_content;
		$view['ids']	 		= $id;
		$view['link']	 		= $get_data->banner_link;
		$view['notip']	 		= Session::get('notip');
		$view['url']			= Config::get('app.url').'public/admin/banner/edit';
		$this->layout->content 	= View::make('admin.banner.form',$view); 	
	}

	function do_edit(){
		$path 		= base_path().'/aset/upload/';
		if(Input::has('content')){
			$id 			= Input::get('ids');
			$content 		= Input::get('content');
			$link 			= Input::get('link');
			
			if(Input::hasFile('image')){
				$image 			= Input::file('image');
				$filename 		= $image->getClientOriginalName();	
				$image->move($path,$filename);
				$data['banner_image'] 		= $filename;
			}	
			$data['banner_link'] 		= $link;
			$data['banner_content'] 	= $content;
			$data['updated_at']			= date('Y-m-d H:i:s');	
			// $idinsert =  $this->banner->add($data);
			if($this->banner->edit($id,$data)){
				Session::flash('notip','<div class="alert alert-success" role="alert">Banner Created</div>');
				return Redirect::to('admin/banner');	
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Created Banner Failed</div>');
				return Redirect::to('admin/banner/create');
			}				  
		}else{
			
			Session::flash('notip','<div class="alert alert-danger" role="alert">Content Must Filled</div>');
			return Redirect::to('admin/banner/create');
		}
		

	}

	function del($id){
			if($this->banner->del($id)){
				// $this->file->delete_bannerid($id);
				Session::flash('notip','<div class="alert alert-success" role="alert">Delete Success</div>');
				return Redirect::to('admin/banner');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Delete failed</div>');
				return Redirect::to('admin/banner');
			}
	}
	function delete_file($id){
		$ids = Input::get('id');			
		$this->file->del_id($id);
		return Redirect::to('admin/banner/edit/'.$ids);
		
	}
}