<?php
class productController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		$this->product 		= new product;
		$this->category 	= new category;
		$this->cp 			= new categoryProduct;
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
		View::share('active','product');
	}
	function index(){
		$category_all 				= $this->category->get_all();
		$cacah_cat 					= ceil(count($category_all)/5);
		$view['product']  			= $this->product->get_page();
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
		$view['product'] 			= $get_product;
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.product.detail',$view);
	}
}