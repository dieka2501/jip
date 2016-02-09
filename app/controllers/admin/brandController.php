<?php
class brandController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		$this->brand = new brand;

	}
	function index(){
		if(Input::has('search')){
			$cari 	= Input::get('search');
			$data 	= $this->brand->get_search($cari);
		}else{
			$cari  	= "";
			$data 	= $this->brand->get_page();
		}
		View::share('big_title','brand');	
		$view['brand'] 		= $data;
		$view['search'] 		= $cari;
		$view['page'] 			= Input::get('page');
		$view['notip'] 			= Session::get('notip');
		$view['data'] 			= $data;
		$this->layout->content 	= View::make('admin.brand.table',$view); 
	}
	function create(){
		$view['name_page'] 	= "Create Brand";
		$view['notip'] 		= Session::get('notip');
		$view['url'] 		= Config::get('app.url').'public/admin/brand/create';
		$view['name'] 		= Session::get('name');
		$view['ids'] 		= Session::get('ids');
		$view['content'] 	= Session::get('content');
		$view['status'] 	= Session::get('status');
		

		$this->layout->content = View::make('admin.brand.form',$view);
	}
	function do_create(){
		$path 	= base_path().'/aset/upload/';
		if(Input::has('name')){
			$name 		= Input::get('name');
			$content 	= Input::get('content');
			$ids 		= Input::get('ids');
			$status 	= Input::get('status');
			$get_name  	= $this->brand->get_name($name);
			if(count($get_name) == 0){
				if(Input::hasFile('image')){
					$image 		= Input::file('image');
					$filename 	= $image->getClientOriginalName();
					$image->move($path,$filename);
					$insert['brand_image'] 		= $filename;
				}
				$insert['brand_name'] 				= $name;
				$insert['brand_description'] 		= $content;
				$insert['brand_status'] 			= $status;
				$insert['date_insert'] 				= date('Y-m-d H:i:s');
				if($this->brand->add($insert) > 0){
					Session::flash('notip','<div class="alert alert-success" role="alert">Insert Success</div>');
					return Redirect::to('admin/brand');	
				}else{
					Session::flash('content',$content);		
					Session::flash('name',$name);	
					Session::flash('status',$status);
					
					Session::flash('notip','<div class="alert alert-danger" role="alert">Insert Failed</div>');
					return Redirect::to('admin/brand/create');
				}
				
			}else{
				Session::flash('content',$content);		
				Session::flash('name',$name);	
				Session::flash('status',$status);
				
				Session::flash('notip','<div class="alert alert-danger" role="alert">Duplicate Brand Name</div>');
				return Redirect::to('admin/brand/create');	
			}
			
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Name Brand Cannot Leave blank</div>');
			return Redirect::to('admin/brand/create');
		}
	}

	function edit($ids){
		$view['name_page'] 	= "Edit Brand";
		$get_data 			= $this->brand->get_id($ids);
		$view['notip'] 		= Session::get('notip');
		$view['url'] 		= Config::get('app.url').'public/admin/brand/edit';
		$view['name'] 		= $get_data->brand_name;
		$view['ids'] 		= $ids;
		$view['content'] 	= $get_data->brand_description;
		$view['status'] 	= $get_data->brand_status;

		$this->layout->content = View::make('admin.brand.form',$view);
	}

	function do_edit(){
		$path 	= base_path().'/aset/upload/';
		if(Input::has('name')){
			$name 		= Input::get('name');
			$content 	= Input::get('content');
			$ids 		= Input::get('ids');
			$status 	= Input::get('status');
			$get_name  	= $this->brand->get_name($name);
			if(true){
				if(Input::hasFile('image')){
					$image 		= Input::file('image');
					$filename 	= $image->getClientOriginalName();
					$image->move($path,$filename);
					$insert['brand_image'] 		= $filename;
				}
				$insert['brand_name'] 				= $name;
				$insert['brand_description'] 		= $content;
				$insert['brand_status'] 			= $status;
				$insert['date_update'] 				= date('Y-m-d H:i:s');
				if($this->brand->edit($ids,$insert)){
					Session::flash('notip','<div class="alert alert-success" role="alert">Update Success</div>');
					return Redirect::to('admin/brand');	
				}else{
					Session::flash('content',$content);		
					Session::flash('name',$name);	
					Session::flash('status',$status);
					
					Session::flash('notip','<div class="alert alert-danger" role="alert">Update Failed</div>');
					return Redirect::to('admin/brand/edit/'.$ids);
				}
				
			}else{
				Session::flash('content',$content);		
				Session::flash('name',$name);	
				Session::flash('status',$status);
				
				Session::flash('notip','<div class="alert alert-danger" role="alert">Duplicate brand Name</div>');
				return Redirect::to('admin/brand/edit/'.$ids);	
			}
			
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Name brand Cannot Leave blank</div>');
			return Redirect::to('admin/brand/edit/'.$ids);
		}
	}
	function del($id){
			if($this->brand->del($id)){
			
				Session::flash('notip','<div class="alert alert-success" role="alert">Delete Success</div>');
				return Redirect::to('admin/brand');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Delete failed</div>');
				return Redirect::to('admin/brand');
			}
	}
}