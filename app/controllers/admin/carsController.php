<?php
class carsController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->cars 				= new cars;
		$this->ci 					= new carsImage; 			
		$this->path 				= base_path().'/aset/upload/';
	}
	function index(){
		// $this->layout->title 	= "Dashboard";
		if(Input::has('search')){
			$search 		= Input::get('search');
			$get_data	 	= $this->cars->get_search($search);
		}else{
			$search 		= "";
			$get_data		= $this->cars->get_page();
		}
		$data['notip'] 		= Session::get('notip');
		$data['q']			= Session::get('q');
		$data['list'] 		= $get_data;
		$data['search'] 	= $search;
		View::share('big_title','Cars');	
		$this->layout->content 	= View::make('admin.cars.table',$data); 
	}
	function create(){
		$view['action'] 			= 'create';
		$view['page_name'] 			= Session::get('page_name');
		$view['notip'] 				= Session::get('notip');
		$view['url'] 				= Config::get('app.url').'public/admin/cars/create';
		$view['ids'] 				= Session::get('ids');
		$view['cars_name']	 		= Session::get('cars_name');
		$view['cars_price'] 		= Session::get('cars_price');
		$view['cars_specification'] = Session::get('cars_specification');
		$view['cars_model'] 		= Session::get('cars_model');
		$view['cars_brand'] 		= Session::get('cars_brand');
		$view['cars_category']		= Session::get('cars_category');
		$view['cars_color'] 		= Session::get('cars_color');
		$view['cars_status'] 		= Session::get('cars_status');
		$this->layout->content 		= View::make('admin.cars.form',$view);
	}
	function do_create(){
		$cars_name  			  = Input::get('cars_name');
		$ids  		  			  = Input::get('ids');
		$cars_price 			  = Input::get('cars_price');
		$cars_specification 	  = Input::get('cars_specification');
		$cars_model   			  = Input::get('cars_model');
		$cars_brand 			  = Input::get('cars_brand');
		$cars_category 			  = Input::get('cars_category');
		$cars_color				  = Input::get('cars_color');
		$cars_status 			  = Input::get('cars_status');
		foreach ($_POST as $key => $value) {
			Session::flash($key,$value);
		}
		// var_dump($kategori);
		// die;
		if(Input::has('cars_name')){
			$get_name_produk 	= $this->cars->get_name($cars_name);
			if(count($get_name_produk)== 0){
				$insert['cars_name']	 		= $cars_name;
				$insert['cars_price']	 		= $cars_price;
				$insert['cars_specification']	= $cars_specification;
				$insert['cars_model']		 	= $cars_model;
				$insert['cars_brand'] 	 		= $cars_brand;
				$insert['cars_category']		= $cars_category;
				$insert['cars_color']			= $cars_color;
				$insert['cars_status']			= $cars_status;
				$insert['created_at'] 			= date('Y-m-d H:i:s');

				$getids 	= $this->cars->add($insert);
				if(Input::hasFile('image')){
					$image 					= Input::file('image');
					$count 					= count($image);
					// var_dump($image[0]->getClientOriginalExtension());die;
					
					for ($i=0; $i < $count; $i++) {

						$ext_main_image 		= $image[$i]->getClientOriginalExtension();
						$filename_main_image	= "main_image".date('YmdHis').$i.'.'.$ext_main_image;
						$image[$i]->move($this->path,$filename_main_image);
						$insertimg['ci_file'] 		= $filename_main_image;
						$insertimg['cars_id'] 		= $getids;
						$insertimg['created_at'] 	= date('Y-m-d H:i:s');
						$this->ci->add($insertimg);
						if($i == 0){
							$updatefeatured['cars_image'] = $filename_main_image;
							$this->cars->edit($getids,$updatefeatured);
						}
					}	
					
				}
				if($getids > 0){
					Session::flash('notip','<div class="alert alert-danger" role="alert">Data berhasil ditambahkan.</div>');
					return Redirect::to('/admin/cars');
				}else{

					
					
					Session::flash('notip','<div class="alert alert-danger" role="alert">Data tidak berhasil ditambahkan, ulangi.</div>');
					return Redirect::to('admin/cars/create');
				}
			}else{
				
				Session::flash('notip','<div class="alert alert-danger" role="alert">Nama Mobil Sudah Ada.</div>');
				return Redirect::to('admin/cars/create');
			}
		}else{
			
			Session::flash('notip','<div class="alert alert-danger" role="alert">Nama Mobil Tidak Boleh Kosong</div>');
			return Redirect::to('admin/cars/create');
		}
	}
	function edit($id){
		if($id != ""){
			$get_data 					= $this->cars->get_id($id);
			// $get_cp 					= $this->categorycars->get_idcars($id);
			// $get_category 				= $this->category->get_all();
			$get_file 					= $this->ci->get_idcars($id);
			// foreach ($get_category as $category) {
			// 	$arr_category[$category->id_category] = $category->category_name;
			// }
			// $get_brand 					= $this->brand->get_all();
			// foreach ($get_brand as $brands) {
			// 	$arr_brand[$brands->id_brand] = $brands->brand_name;
			// }
			// $arr_cp 	= [];
			// foreach ($get_cp as $cps) {
			// 	$arr_cp[] = $cps->category_id; 	
			// }
			$view['action'] 			= 'edit';
			$view['page_name'] 			= "Edit Mobil";
			$view['notip'] 				= Session::get('notip');
			$view['url'] 				= Config::get('app.url').'public/admin/cars/edit';
			$view['ids'] 				= $id;
			$view['cars_name'] 			= $get_data->cars_name;
			$view['cars_price'] 		= $get_data->cars_price;
			$view['cars_specification']	= $get_data->cars_specification;
			$view['cars_model'] 		= $get_data->cars_model;
			$view['cars_brand']			= $get_data->cars_brand;
			$view['cars_category'] 		= $get_data->cars_category;
			$view['cars_color']		 	= $get_data->cars_color;
			$view['cars_status']		= $get_data->cars_status;
			// $view['arr_brand']			= $arr_brand;
			$view['pf']					= $get_file;
			$this->layout->content = View::make('admin.cars.form',$view);
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Opps... ada kesalahan.. </div>');
			return Redirect::to('admin/cars');	
		}
	}
	function do_edit(){
		$cars_name  			  = Input::get('cars_name');
		$ids  		  			  = Input::get('ids');
		$cars_price 			  = Input::get('cars_price');
		$cars_specification 	  = Input::get('cars_specification');
		$cars_model   			  = Input::get('cars_model');
		$cars_brand 			  = Input::get('cars_brand');
		$cars_category 			  = Input::get('cars_category');
		$cars_color				  = Input::get('cars_color');
		$cars_status 			  = Input::get('cars_status');
		foreach ($_POST as $key => $value) {
			Session::flash($key,$value);
		}
		// var_dump($kategori);
		// die;
		if(Input::has('cars_name')){
			// $get_name_produk 	= $this->cars->get_name($nama_produk);
			if(true){
				$insert['cars_name']	 		= $cars_name;
				$insert['cars_price']	 		= $cars_price;
				$insert['cars_specification']	= $cars_specification;
				$insert['cars_model']		 	= $cars_model;
				$insert['cars_brand'] 	 		= $cars_brand;
				$insert['cars_category']		= $cars_category;
				$insert['cars_color']			= $cars_color;
				$insert['cars_status']			= $cars_status;
				$insert['updated_at'] 			= date('Y-m-d H:i:s');
				
				if(Input::hasFile('image')){
					$image 					= Input::file('image');
					$count 					= count($image);
					// var_dump($image[0]->getClientOriginalExtension());die;
					
					for ($i=0; $i < $count; $i++) {

						$ext_main_image 		= $image[$i]->getClientOriginalExtension();
						$filename_main_image	= "main_image".date('YmdHis').$i.'.'.$ext_main_image;
						$image[$i]->move($this->path,$filename_main_image);
						$insertimg['ci_file'] 	= $filename_main_image;
						$insertimg['cars_id'] 	= $ids;
						$insertimg['created_at'] 	= date('Y-m-d H:i:s');
						$this->ci->add($insertimg);
						if($i == 0){
							$insert['cars_image'] = $filename_main_image;
							
						}
					}	
					
				}
				$update_cars = $this->cars->edit($ids,$insert);
				if($update_cars){
					Session::flash('notip','<div class="alert alert-sucess" role="alert">Data berhasil diedit.</div>');
					return Redirect::to('/admin/cars');
				}else{
					Session::flash('notip','<div class="alert alert-danger" role="alert">Data tidak berhasil diedit, ulangi.</div>');
					return Redirect::to('admin/cars/create');
				}
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Nama Produk Sudah Ada.</div>');
				return Redirect::to('admin/cars/create');
			}
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Nama Produk. Kategori, dan Brand Tidak Boleh Kosong</div>');
			return Redirect::to('admin/cars/create');
		}	
	}
	function del($id){
			if($this->cars->del($id)){
				$this->ci->del_idcars($id);
				Session::flash('notip','<div class="alert alert-success" role="alert">Delete Success</div>');
				return Redirect::to('admin/cars');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Delete failed</div>');
				return Redirect::to('admin/cars');
			}
	}
	function delete_file($id){
		$ids = Input::get('id');			
		$this->ci->del($id);
		return Redirect::to('admin/cars/edit/'.$ids);
		
	}
}
