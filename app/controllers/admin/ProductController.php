<?php
class ProductController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->product 				= new product;
		$this->category 			= new category;
		$this->brand 				= new brand;
		$this->categoryProduct 		= new categoryProduct;
		$this->pf 					= new productFile;
		$this->path 				= base_path().'/aset/upload/';
	}
	function index(){
		// $this->layout->title 	= "Dashboard";
		if(Input::has('search')){
			$search 		= Input::get('search');
			$get_data	 	= $this->product->get_search($search);
		}else{
			$search 		= "";
			$get_data		= $this->product->get_page();
		}
		$data['notip'] 		= Session::get('notip');
		$data['q']			= Session::get('q');
		$data['list'] 		= $get_data;
		$data['search'] 	= $search;
		View::share('big_title','Product');	
		$this->layout->content 	= View::make('admin.produk.table',$data); 
	}
	function create(){
		$get_category 				= $this->category->get_all();
		foreach ($get_category as $category) {
			$arr_category[$category->id_category] = $category->category_name;
		}
		$get_brand 					= $this->brand->get_all();
		foreach ($get_brand as $brands) {
			$arr_brand[$brands->id_brand] = $brands->brand_name;
		}
		$view['action'] 			= 'create';
		$view['page_name'] 			= Session::get('page_name');
		$view['notip'] 				= Session::get('notip');
		$view['url'] 				= Config::get('app.url').'public/admin/product/create';
		$view['ids'] 				= Session::get('ids');
		$view['nama_produk'] 		= Session::get('nama_produk');
		$view['harga_produk'] 		= Session::get('harga_produk');
		$view['model_produk'] 		= Session::get('model_produk');
		$view['brand_produk'] 		= Session::get('brand_produk');
		$view['stock_produk'] 		= Session::get('stock_produk');
		$view['description_product']= Session::get('description_product');
		$view['kategori'] 			= Session::get('kategori');
		$view['status_product'] 	= Session::get('status_product');
		$view['arr_kategori']		= $arr_category;
		$view['arr_brand']			= $arr_brand;

		$this->layout->content = View::make('admin.produk.form',$view);
	}
	function do_create(){
		$nama_produk  			  = Input::get('nama_produk');
		$ids  		  			  = Input::get('ids');
		$harga_produk 			  = Input::get('harga_produk');
		$model_produk 			  = Input::get('model_produk');
		$brand 		  			  = Input::get('brand');
		$stock_produk 			  = Input::get('stock_produk');
		$brand_status 			  = Input::get('brand_status');
		$status_product			  = Input::get('status_product');
		$kategori 	 	 		  = Input::get('kategori');
		$description_product 	  = Input::get('description_product');
		// var_dump($kategori);
		// die;
		if(Input::has('nama_produk') && Input::has('brand') && Input::has('kategori')){
			$get_name_produk 	= $this->product->get_name($nama_produk);
			if(count($get_name_produk)== 0){
				$insert['name_product'] 		= $nama_produk;
				$insert['stock_product'] 		= $stock_produk;
				$insert['price_product'] 		= $harga_produk;
				$insert['description_product'] 	= $description_product;
				$insert['brand_id'] 	 		= $brand;
				$insert['status_product'] 		= $status_product;
				$insert['created_at'] 			= date('Y-m-d H:i:s');

				// if(Input::hasFile('image2')){
				// 	$image2 			= Input::file('image2');
				// 	$ext_image2 		= $image2->getClientOriginalExtension();
				// 	$filename_image2	= "image2".date('YmdHis').'.'.$ext_image2;
				// 	$image2->move($this->path,$filename_image2);
				// 	$insert['image2'] 	= $filename_image2;
				// }
				// if(Input::hasFile('image3')){
				// 	$image3 			= Input::file('image3');
				// 	$ext_image3 		= $image3->getClientOriginalExtension();
				// 	$filename_image3	= "image3".date('YmdHis').'.'.$ext_image3;
				// 	$image3->move($this->path,$filename_image3);
				// 	$insert['image3'] 	= $filename_image3;
				// }
				// if(Input::hasFile('image4')){
				// 	$image4 			= Input::file('image4');
				// 	$ext_image4 		= $image4->getClientOriginalExtension();
				// 	$filename_image4	= "image4".date('YmdHis').'.'.$ext_image4;
				// 	$image4->move($this->path,$filename_image4);
				// 	$insert['image4'] 	= $filename_image4;
				// }
				$getids 	= $this->product->add($insert);
				if(Input::hasFile('image')){
					$image 					= Input::file('image');
					$count 					= count($image);
					// var_dump($image[0]->getClientOriginalExtension());die;
					
					for ($i=0; $i < $count; $i++) {

						$ext_main_image 		= $image[$i]->getClientOriginalExtension();
						$filename_main_image	= "main_image".date('YmdHis').'.'.$ext_main_image;
						$image[$i]->move($this->path,$filename_main_image);
						$insertimg['image_url'] 	= $filename_main_image;
						$insertimg['product_id'] 	= $getids;
						$insertimg['created_at'] 	= date('Y-m-d H:i:s');
						$this->pf->add($insertimg);
						if($i == 0){
							$updatefeatured['main_image'] = $filename_main_image;
							$this->product->edit($getids,$updatefeatured);
						}
					}	
					
				}
				if($getids > 0){
					foreach ($kategori as $kategoris) {
						$cp['category_id'] = $kategoris;
						$cp['product_id']  = $getids;
						$cp['created_at']  = date('Y-m-d H:i:s');
						$cp['updated_at']  = date('Y-m-d H:i:s');
						$this->categoryProduct->add($cp);

					}
					// var_dump($cp);
					return Redirect::to('/admin/product');
				}else{
					Session::flash('harga_produk',$harga_produk);
					Session::flash('model_produk',$model_produk);
					Session::flash('brand',$brand);
					Session::flash('stock_produk',$stock_produk);
					Session::flash('status_product',$status_product);
					Session::flash('kategori',$kategori);
					Session::flash('description_product',$description_product);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Data tidak berhasil ditambahkan, ulangi.</div>');
					return Redirect::to('admin/product/create');
				}
			}else{
				Session::flash('harga_produk',$harga_produk);
				Session::flash('model_produk',$model_produk);
				Session::flash('brand',$brand);
				Session::flash('stock_produk',$stock_produk);
				Session::flash('status_product',$status_product);
				Session::flash('kategori',$kategori);
				Session::flash('description_product',$description_product);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Nama Produk Sudah Ada.</div>');
				return Redirect::to('admin/product/create');
			}
		}else{
			Session::flash('nama_produk',$nama_produk);
			Session::flash('harga_produk',$harga_produk);
			Session::flash('model_produk',$model_produk);
			Session::flash('brand',$brand);
			Session::flash('stock_produk',$stock_produk);
			Session::flash('status_product',$status_product);
			Session::flash('kategori',$kategori);
			Session::flash('description_product',$description_product);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Nama Produk. Kategori, dan Brand Tidak Boleh Kosong</div>');
			return Redirect::to('admin/product/create');
		}
	}
	function edit($id){
		if($id != ""){
			$get_data 					= $this->product->get_id($id);
			$get_cp 					= $this->categoryProduct->get_idproduct($id);
			$get_category 				= $this->category->get_all();
			foreach ($get_category as $category) {
				$arr_category[$category->id_category] = $category->category_name;
			}
			$get_brand 					= $this->brand->get_all();
			foreach ($get_brand as $brands) {
				$arr_brand[$brands->id_brand] = $brands->brand_name;
			}
			$arr_cp 	= [];
			foreach ($get_cp as $cps) {
				$arr_cp[] = $cps->category_id; 	
			}
			$view['page_name'] 			= "Edit Product";
			$view['notip'] 				= Session::get('notip');
			$view['url'] 				= Config::get('app.url').'public/admin/product/edit';
			$view['ids'] 				= $id;
			$view['nama_produk'] 		= $get_data->name_product;
			$view['harga_produk'] 		= $get_data->price_product;
			$view['model_produk'] 		= $get_data->model_product;
			$view['brand_produk'] 		= $get_data->brand_id;
			$view['stock_produk'] 		= $get_data->stock_product;
			$view['description_product']= $get_data->description_product;
			$view['kategori'] 			= $arr_cp;
			$view['status_product'] 	= $get_data->status_product;
			$view['arr_kategori']		= $arr_category;
			$view['arr_brand']			= $arr_brand;

			$this->layout->content = View::make('admin.produk.form',$view);
		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Opps... ada kesalahan.. </div>');
			return Redirect::to('admin/product');	
		}
	}
	function do_edit(){
		$nama_produk  			  = Input::get('nama_produk');
		$ids  		  			  = Input::get('ids');
		$harga_produk 			  = Input::get('harga_produk');
		$model_produk 			  = Input::get('model_produk');
		$brand 		  			  = Input::get('brand');
		$stock_produk 			  = Input::get('stock_produk');
		$status_product 		  = Input::get('status_product');
		$kategori 	 	 		  = Input::get('kategori');
		$description_product 	  = Input::get('description_product');
		// var_dump($kategori);
		// die;
		if(Input::has('nama_produk') && Input::has('brand') && Input::has('kategori')){
			// $get_name_produk 	= $this->product->get_name($nama_produk);
			if(true){
				$insert['name_product'] 		= $nama_produk;
				$insert['stock_product'] 		= $stock_produk;
				$insert['price_product'] 		= $harga_produk;
				$insert['description_product'] 	= $description_product;
				$insert['brand_id'] 	 		= $brand;
				$insert['model_product'] 		= $model_produk;
				$insert['status_product'] 		= $status_product;
				$insert['created_at'] 			= date('Y-m-d H:i:s');
				if(Input::hasFile('main_image')){
					$main_image 			= Input::file('main_image');
					$ext_main_image 		= $main_image->getClientOriginalExtension();
					$filename_main_image	= "main_image".date('YmdHis').'.'.$ext_main_image;
					$main_image->move($this->path,$filename_main_image);
					$insert['main_image'] 	= $filename_main_image;
				}
				if(Input::hasFile('image2')){
					$image2 			= Input::file('image2');
					$ext_image2 		= $image2->getClientOriginalExtension();
					$filename_image2	= "image2".date('YmdHis').'.'.$ext_image2;
					$image2->move($this->path,$filename_image2);
					$insert['image2'] 	= $filename_image2;
				}
				if(Input::hasFile('image3')){
					$image3 			= Input::file('image3');
					$ext_image3 		= $image3->getClientOriginalExtension();
					$filename_image3	= "image3".date('YmdHis').'.'.$ext_image3;
					$image3->move($this->path,$filename_image3);
					$insert['image3'] 	= $filename_image3;
				}
				if(Input::hasFile('image4')){
					$image4 			= Input::file('image4');
					$ext_image4 		= $image4->getClientOriginalExtension();
					$filename_image4	= "image4".date('YmdHis').'.'.$ext_image4;
					$image4->move($this->path,$filename_image4);
					$insert['image4'] 	= $filename_image4;
				}
				$update_product = $this->product->edit($ids,$insert);
				if($update_product){
					$this->categoryProduct->delete_idproduct($ids);
					foreach ($kategori as $kategoris) {
						$cp['category_id'] = $kategoris;
						$cp['product_id']  = $ids;
						$cp['updated_at']  = date('Y-m-d H:i:s');
						$this->categoryProduct->add($cp);

					}
					// var_dump($cp);
					return Redirect::to('/admin/product');
				}else{
					Session::flash('harga_produk',$harga_produk);
					Session::flash('model_produk',$model_produk);
					Session::flash('brand',$brand);
					Session::flash('stock_produk',$stock_produk);
					Session::flash('status_product',$status_product);
					Session::flash('kategori',$kategori);
					Session::flash('description_product',$description_product);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Data tidak berhasil ditambahkan, ulangi.</div>');
					return Redirect::to('admin/product/create');
				}
			}else{
				Session::flash('harga_produk',$harga_produk);
				Session::flash('model_produk',$model_produk);
				Session::flash('brand',$brand);
				Session::flash('stock_produk',$stock_produk);
				Session::flash('status_product',$status_product);
				Session::flash('kategori',$kategori);
				Session::flash('description_product',$description_product);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Nama Produk Sudah Ada.</div>');
				return Redirect::to('admin/product/create');
			}
		}else{
			Session::flash('nama_produk',$nama_produk);
			Session::flash('harga_produk',$harga_produk);
			Session::flash('model_produk',$model_produk);
			Session::flash('brand',$brand);
			Session::flash('stock_produk',$stock_produk);
			Session::flash('status_product',$status_product);
			Session::flash('kategori',$kategori);
			Session::flash('description_product',$description_product);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Nama Produk. Kategori, dan Brand Tidak Boleh Kosong</div>');
			return Redirect::to('admin/product/create');
		}	
	}
	function del($id){
			if($this->product->del($id)){
				$this->categoryProduct->delete_idproduct($id);
				Session::flash('notip','<div class="alert alert-success" role="alert">Delete Success</div>');
				return Redirect::to('admin/product');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Delete failed</div>');
				return Redirect::to('admin/product');
			}
	}
}