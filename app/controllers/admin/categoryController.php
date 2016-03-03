<?php
class categoryController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		$this->category = new category;

	}
	function index(){
		if(Input::has('search')){
			$cari 	= Input::get('search');
			$data 	= $this->category->get_search($cari);
		}else{
			$cari  	= "";
			$data 	= $this->category->get_page();
		}
		// View::share('big_title','Category');	
		// $view['category'] 		= $data;
		$view['search'] 		= $cari;
		$view['page'] 			= Input::get('page');
		$view['notip'] 			= Session::get('notip');
		$view['data'] 			= $data;
		$this->layout->content 	= View::make('admin.kategori.table',$view); 
	}
	function create(){
		
		$get_parent 		= $this->category->get_parent();
		$arr_parent[0] 		= "-- Choose Parent --";
		foreach ($get_parent as $parents) {
			$arr_parent[$parents->id_category] = $parents->category_name;
		}
		$view['page_name'] 	= "Create Category";
		$view['notip'] 		= Session::get('notip');
		$view['url'] 		= Config::get('app.url').'public/admin/category/create';
		$view['name'] 		= Session::get('name');
		$view['ids'] 		= Session::get('ids');
		$view['content'] 	= Session::get('content');
		$view['status'] 	= Session::get('status');
		$view['parent'] 	= Session::get('parent');
		$view['arr_parent']	= $arr_parent;

		$this->layout->content = View::make('admin.kategori.form',$view);
	}
	function do_create(){
		$path 	= base_path().'/aset/upload/';
		if(Input::has('name')){
			$name 		= Input::get('name');
			$content 	= Input::get('content');
			$ids 		= Input::get('ids');
			$status 	= Input::get('status');
			$parent 	= Input::get('parent');
			$get_name  	= $this->category->get_name($name);
			if(count($get_name) == 0){
				if(Input::hasFile('image')){
					$image 		= Input::file('image');
					$filename 	= $image->getClientOriginalName();
					$image->move($path,$filename);
					$insert['category_image'] 		= $filename;
				}
				$insert['category_name'] 			= $name;
				$insert['category_description'] 	= $content;
				$insert['category_parent'] 			= $parent;
				$insert['category_status'] 			= $status;
				$insert['date_insert'] 				= date('Y-m-d H:i:s');
				if($this->category->add($insert) > 0){
					Session::flash('notip','<div class="alert alert-success" role="alert">Insert Success</div>');
					return Redirect::to('admin/category');	
				}else{
					Session::flash('content',$content);		
					Session::flash('name',$name);	
					Session::flash('status',$status);
					Session::flash('parent',$parent);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Insert Failed</div>');
					return Redirect::to('admin/category/create');
				}
				
			}else{
				Session::flash('content',$content);		
				Session::flash('name',$name);	
				Session::flash('status',$status);
				Session::flash('parent',$parent);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Duplicate Category Name</div>');
				return Redirect::to('admin/category/create');	
			}
			
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Name Category Cannot Leave blank</div>');
			return Redirect::to('admin/category/create');
		}
	}

	function edit($ids){
		
		$get_parent 		= $this->category->get_parent_edit($ids);
		$arr_parent[0] 		= "-- Choose Parent --";
		foreach ($get_parent as $parents) {
			$arr_parent[$parents->id_category] = $parents->category_name;
		}
		$get_data 			= $this->category->get_id($ids);
		$view['page_name'] 	= "Edit Category";
		$view['notip'] 		= Session::get('notip');
		$view['url'] 		= Config::get('app.url').'public/admin/category/edit';
		$view['name'] 		= $get_data->category_name;
		$view['ids'] 		= $ids;
		$view['content'] 	= $get_data->category_description;
		$view['status'] 	= $get_data->category_status;
		$view['parent'] 	= $get_data->category_parent;
		$view['arr_parent']	= $arr_parent;

		$this->layout->content = View::make('admin.kategori.form',$view);
	}

	function do_edit(){
		$path 	= base_path().'/aset/upload/';
		if(Input::has('name')){
			$name 		= Input::get('name');
			$content 	= Input::get('content');
			$ids 		= Input::get('ids');
			$status 	= Input::get('status');
			$parent 	= Input::get('parent');
			// $get_name  	= $this->category->get_name($name);
			if(true){
				if(Input::hasFile('image')){
					$image 		= Input::file('image');
					$filename 	= $image->getClientOriginalName();
					$image->move($path,$filename);
					$insert['category_image'] 		= $filename;
				}
				$insert['category_name'] 			= $name;
				$insert['category_description'] 	= $content;
				$insert['category_parent'] 			= $parent;
				$insert['category_status'] 			= $status;
				$insert['date_update'] 				= date('Y-m-d H:i:s');
				if($this->category->edit($ids,$insert)){
					Session::flash('notip','<div class="alert alert-success" role="alert">Update Success</div>');
					return Redirect::to('admin/category');	
				}else{
					Session::flash('content',$content);		
					Session::flash('name',$name);	
					Session::flash('status',$status);
					Session::flash('parent',$parent);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Update Failed</div>');
					return Redirect::to('admin/category/edit/'.$ids);
				}
				
			}else{
				Session::flash('content',$content);		
				Session::flash('name',$name);	
				Session::flash('status',$status);
				Session::flash('parent',$parent);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Duplicate Category Name</div>');
				return Redirect::to('admin/category/edit/'.$ids);	
			}
			
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Name Category Cannot Leave blank</div>');
			return Redirect::to('admin/category/edit/'.$ids);
		}
	}
	function del($id){
			if($this->category->del($id)){
			
				Session::flash('notip','<div class="alert alert-success" role="alert">Delete Success</div>');
				return Redirect::to('admin/category');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Delete failed</div>');
				return Redirect::to('admin/category');
			}
	}
}