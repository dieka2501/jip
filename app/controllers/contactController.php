<?php
class contactController extends BaseController{
	protected $layout = 'front.template';
	function __construct(){
		$this->category 	= new category;
		$this->cp 			= new categoryProduct;
		$this->contact 		= new contact;
		$arr_child 			= array();
		$arr_cat 			= array();
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
		View::share('active','contactus');
	}
	function index(){
		$this->layout->menu 		= View::make('front.menu');
		$this->layout->content 		= View::make('front.contact_us.page');
	}
	function do_contact(){
		if(Input::has('email') && Input::has('message')){
			$email 		= Input::get('email');
			$message 	= Input::get('message');
			$name 		= Input::get('name');
			$subject 	= Input::get('subject');
			$insert['contact_name'] 	= $name;
			$insert['contact_email'] 	= $email;
			$insert['contact_message'] 	= $message;
			$insert['contact_subject'] 	= $subject;
			$insert['created_at'] 		= date('Y-m-d H:i:s');
			$ids = $this->contact->add($insert);
			if($ids > 0){
				$detail['email'] 	= $email;
				$detail['name'] 	= $name;
				$detail['subject'] 	= $subject;
				$detail['content'] 	= $message;
				$msg['email'] 		= $email;
				$msg['name'] 		= $name;
				$msg['subject']		= $subject;
				Mail::send('emails.email',$detail,function($message) use ($msg){
					$message->from($msg['email'],$msg['name'])->subject($msg['subject'])->to('dieka.koes@gmail.com');
				});
				$status 	= true;
				$alert 		= "Data Insert, Successfull";	
			}else{
				$status 	= false;
				$alert 		= "Data Insert, Failed";	
			}
		}else{
			$status 	= false;
			$alert 		= "Email and Content must be filled";
		}
		return Response::json(['status'=>$status,'alert'=>$alert]);
	}
}
