<?php
class usedCarsController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		$this->cars 		= new cars;
		$this->ci 			= new carsImage;
		// $this->product 		= new product;
		// $this->pf 			= new productFile;
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
		View::share('active','used_cars');
	}
	function index(){
		$view['cars']  				= $this->cars->get_used_page();
		// $get_cp 					= [];
		// foreach ($view['product'] as $products) {
		// 	$get_cp[$products->id_product][] = $this->cp->get_idproduct($products->id_product);
		// }
		// $view['cp'] 		 		= $get_cp;
		// $view['cat_all'] 		 	= $category_all;
		// $view['cacah_cat'] 		 	= $cacah_cat;
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.used_car.list',$view);
	}
	function detail($id){
		$get_product 				= $this->cars->get_id($id);
		$get_file 					= $this->ci->get_idcars($id);
		$view['file'] 				= $get_file;
		$view['product'] 			= $get_product;
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.used_car.detail',$view);
	}
	function category($idcat){
		$getcatprod 				= $this->cp->get_idcat($idcat);
		$category_all 				= $this->category->get_all();
		$cacah_cat 					= ceil(count($category_all)/5);
		$view['product']  			= $getcatprod;
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