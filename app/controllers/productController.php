<?php
class productController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		$this->product 		= new product;
		$this->pf 			= new productFile;
		$this->category 	= new category;
		$this->cp 			= new categoryProduct;
		$get_parent 		= $this->category->get_parent();
		$arr_child 			= array();
		$arr_cat 			= array();
		foreach ($get_parent as $categories) {
			$arr_cat[$categories->id_category] = $categories->category_name;
			$get_child 		= $this->category->get_idparent($categories->id_category);
			
			foreach ($get_child as $childs) {
				$arr_child[$categories->id_category][$childs->id_category] = $childs->category_name;
			}
		}

		View::share('menucat',$arr_cat);
		View::share('childcat',$arr_child);
		View::share('active','product');
	}
	function index(){
		$category_all 				= $this->category->get_all();
		$cacah_cat 					= ceil(count($category_all)/5);
		if(Input::has('cari')){
			$cari 		= Input::get('cari');
			$page 		= $this->product->get_search($cari);
		}else{
			$cari 		= "";
			$page 		= $this->product->get_page();
		}
		$view['cari']				= $cari;
		$view['product']  			= $page;
		$get_cp 					= [];
		foreach ($view['product'] as $products) {
			$get_cp[$products->id_product][] = $this->cp->get_idproduct($products->id_product);
		}
		$view['cp'] 		 		= $get_cp;
		$view['cat_all'] 		 	= $category_all;
		$view['cacah_cat'] 		 	= $cacah_cat;
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.product.list',$view);
	}
	function detail($id){
		$get_product 				= $this->product->get_id($id);
		$get_file 					= $this->pf->get_idproduct($id);
		$view['file'] 				= $get_file;
		$view['product'] 			= $get_product;
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.product.detail',$view);
	}
	function category($idcat){
		if(Input::has('cari')){
			$cari 				= Input::get('cari');
			$getcatprod 		= $this->cp->get_idcat($idcat);
		}else{
			$cari 				= "";
			$getcatprod 		= $this->cp->get_idcat_cari($idcat,$cari);
		}
		
		$category_all 				= $this->category->get_all();
		$cacah_cat 					= ceil(count($category_all)/5);

		$view['product']  			= $getcatprod;
		$view['cari'] 	 			= $cari;

		$get_cp 					= [];
		foreach ($view['product'] as $products) {
			$get_cp[$products->id_product][] = $this->cp->get_idproduct($products->id_product);
		}
		$view['cp'] 		 		= $get_cp;
		$view['cat_all'] 		 	= $category_all;
		$view['cacah_cat'] 		 	= $cacah_cat;
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.product.list',$view);	
	}
}