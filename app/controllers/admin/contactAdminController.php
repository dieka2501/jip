<?php
class contactAdminController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->contact 	= new contact;
	}
	function index(){
		View::share('big_title','Message');
		// if(Input::has('q')){
		// 	$q 			= Input::get('q');
		// 	$get_data 	= $this->banner->get_search($q);
		// }else{
		// 	$q 			= "";
		// 	$get_data 	= $this->banner->get_page();
		// }
		// $view['q']				= $this->contact->get_page();
		$view['get_data']		= $this->contact->get_page();
		$view['notip']			= Session::get('notip');
		$this->layout->content 	= View::make('admin.message.table',$view); 
	}
	function reply($id){
		View::share('big_title','Message');
		$getdata 			= $this->contact->get_id($id);
		$view['data'] 		= $getdata;
		$view['ids']  		= $id;
		$view['page_name']	= "Reply Message";
		$view['notip']		= Session::get('notip');
		$view['reply']		= Session::get('reply');
		$view['url'] 		= Config::get('app.url').'public/admin/message/reply';
		$this->layout->content 	= View::make('admin.message.form',$view); 	

	}
	function do_reply(){
		if(Input::has('reply')){
			$id 		= Input::get('ids');
			$reply 		= Input::get('reply');
			$getid 		= $this->contact->get_id($id);
			$update['contact_reply'] 	= $reply;
			$update['updated_at'] 		= date('Y-m-d H:i:s');
			// ;
			if($this->contact->edit($id,$update)){
					$detail['email'] 	= 'admin@jhlautocustom.com';
					$detail['name'] 	= 'admin';
					$detail['subject'] 	= "Re :".$getid->contact_subject;
					$detail['content'] 	= $getid->contact_reply;
					$msg['email'] 		= $getid->contact_email;
					$msg['name'] 		= $getid->contact_name;
					$msg['subject']		= "Re :".$getid->contact_subject;
					Mail::send('emails.email',$detail,function($message) use ($msg){
						$message->from('admin@jhlautocustom.com','admin')->subject($msg['subject'])->to($msg['email']);
					});		
					Session::flash('notip','<div class="alert alert-success" role="alert">Message sent success</div>');
					return Redirect::to('admin/message');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Message sent failed</div>');
				return Redirect::to('admin/message');
			}
			


		}else{
			Session::flash('notip','<div class="alert alert-danger" role="alert">Message must be filled</div>');
			return Redirect::to('admin/message');
		}
	}
}