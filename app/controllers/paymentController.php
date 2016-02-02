<?php
class paymentController Extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		date_default_timezone_set('Asia/jakarta');
		$this->path 		= base_path().'/aset/payment/';
		$this->category 	= new category;
		$this->order 		= new order;
		$this->payment 		= new payment;
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
		View::share('active','payment');
		
	}
	function index(){
		$view['notip'] 				= Session::get('notip');
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.payment.index',$view);
	}
	function json_order(){
		$id_order 		= Input::get('id_order');
		$get_data 		= $this->order->get_id_order($id_order);
		if(count($get_data) > 0){
			$alert 	= 'Data diketemukan';
			$data  	= $get_data;
			$status = true;
		}else{
			$alert 	= 'Order no '.$id_order.' tidak diketemukan atau sudah dibayar';
			$data  	= null;
			$status = false;
		}
		return Response::json(['status'=>$status,'data'=>$data,'alert'=>$alert]);
	}
	function do_payment(){
		$order_id 				= Input::get('order_id_pembelian');
		$total_pembayaran 		= Input::get('total_pembayaran');
		$nama_pembayaran 		= Input::get('nama_pembayaran');
		$catatan_pembayaran		= Input::get('catatan_pembayaran');
		if(Input::hasFile('bukti_pembayaran')){
			$image 		= Input::file('bukti_pembayaran');
			$getext 	= $image->getClientOriginalExtension();
			$filename 	= date('YmdHis').'.'.$getext;
			$image->move($this->path,$filename);
			$insert['payment_image'] = $filename;
		}
		$insert['order_id'] 		= $order_id;
		$insert['payment_paid'] 	= $total_pembayaran;
		$insert['payment_name'] 	= $nama_pembayaran;
		$insert['payment_note'] 	= $catatan_pembayaran;
		$insert['created_at'] 		= date('Y-m-d H:i:s');
		$ids = $this->payment->add($insert);
		if($ids > 0){
			Session::flash('notip',"<div class='alert alert-success'>Pembayaran telah diterima.</div>");
			$update['order_status'] = 1;
			$this->order->edit($order_id,$update);

		}else{
			Session::flash('notip',"<div class='alert alert-danger'>Pembayaran gagal dicatat, silakan ulangi.</div>");
		}
		return Redirect::to('/payment');

	}

}