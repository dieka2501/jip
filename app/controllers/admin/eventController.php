<?php
class eventController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		$this->event = new event;
		$this->file  = new eventfile;
	}
	function index(){
		View::share('big_title','event');
		if(Input::has('q')){
			$q 			= Input::get('q');
			$get_data 	= $this->event->get_search($q);
		}else{
			$q 			= "";
			$get_data 	= $this->event->get_page();
		}
		$view['q']				= $q;
		$view['get_data']		= $get_data;
		$view['notip']			= Session::get('notip');
		$this->layout->content 	= View::make('admin.event.list',$view); 
	}

	function create(){
		View::share('big_title','Create event');
		$view['name'] 			= Session::get('name');
		$view['description']	= Session::get('description');
		$view['ids']	 		= Session::get('ids');
		$view['date']	 		= Session::get('date');
		$view['location'] 		= Session::get('location');
		$view['notip']	 		= Session::get('notip');
		$view['url']			= Config::get('app.url').'public/admin/event/create';
		$this->layout->content 	= View::make('admin.event.form',$view); 	
	}
	function do_create(){
		$path 		= base_path().'/aset/upload';
		if(Input::has('name') && Input::has('description')){
			$name 			= Input::get('name');
			$description 	= Input::get('description');
			$date 	 		= Input::get('date');
			$location  		= Input::get('location');
			$get_title 		= $this->event->get_title($name);
			if(count($get_title) == 0){
				$data['name_event'] 			= $name;
				$data['description_event']		= $description;
				$data['location_event'] 		= $location;
				$data['date_event'] 			= $date;
				$data['date_insert']			= date('Y-m-d H:i:s');	
				$idinsert = $this->event->add($data);
				if($idinsert > 0){
					if(Input::hasFile('image')){
						$image 		= Input::file('image');
						$count 		= count($image);
						for($i = 0; $count > $i; $i++){
							if(!is_null($image[$i])){
								$filename 	= $image[$i]->getClientOriginalName();
								$image[$i]->move($path,$filename);
								$file['event_id']		= $idinsert;
								$file['file']			= $filename;
								$file['date_insert']	= date('Y-m-d H:i:s');
								$this->file->add($file);
							}
						}
						
					}else{
						$filename = '';
					}
					Session::flash('notip','<div class="alert alert-success" role="alert">Insert Success</div>');
					return Redirect::to('admin/event');	
				}else{
					Session::flash('name',$name);
					Session::flash('description',$description);
					Session::flash('location',$location);
					Session::flash('date',$date);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Title & Content Cannot Leave blank</div>');
					return Redirect::to('admin/event/create');
				}	
			}else{
				Session::flash('name',$name);
				Session::flash('description',$description);
				Session::flash('location',$location);
				Session::flash('date',$date);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Title Exists</div>');
				return Redirect::to('admin/event/create');
			}
		}else{
			Session::flash('name',$name);
			Session::flash('description',$description);
			Session::flash('location',$location);
			Session::flash('date',$date);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Title & Content Cannot Leave blank</div>');
			return Redirect::to('admin/event/create');
		}
		

	}

	function edit($id){
		View::share('big_title','Edit event');
		$get_data 				= $this->event->get_id($id);
		$view['name'] 			= $get_data->name_event;
		$view['description']	= $get_data->description_event;
		$view['ids']	 		= $id;
		$view['date']	 		= $get_data->date_event;
		$view['location'] 		= $get_data->location_event;
		$view['notip']	 		= Session::get('notip');
		$view['url']			= Config::get('app.url').'public/admin/event/edit';
		$this->layout->content 	= View::make('admin.event.form',$view); 	
	}

	function do_edit(){
		$path 		= base_path().'/aset/upload';
		if(Input::has('name') && Input::has('description')){
			$name 			= Input::get('name');
			$description 	= Input::get('description');
			$date 	 		= Input::get('date');
			$location  		= Input::get('location');
			$ids 			= Input::get('ids');
			if(true){
				if(Input::hasFile('image')){
					$image 		= Input::file('image');
					$count 		= count($image);
					$this->file->delete_eventid($ids);
					for($i = 0; $count > $i; $i++){
						if(!is_null($image[$i])){
							$filename 	= $image[$i]->getClientOriginalName();
							$image[$i]->move($path,$filename);
							$file['event_id']		= $ids;
							$file['file']			= $filename;
							$file['date_insert']	= date('Y-m-d H:i:s');
							$this->file->add($file);
						}
					}
				}else{
					$filename = '';
				}
				$data['name_event'] 			= $name;
				
				$data['description_event']		= $description;
				$data['location_event'] 		= $location;
				$data['date_event'] 			= $date;
				$data['date_update']			= date('Y-m-d H:i:s');	
				
				if($this->event->edit($ids,$data)){
					Session::flash('notip','<div class="alert alert-success" role="alert">Update Success</div>');
					return Redirect::to('admin/event');	
				}else{
					Session::flash('name',$name);
					Session::flash('description',$description);
					Session::flash('location',$location);
					Session::flash('date',$date);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Title & Content Cannot Leave blank</div>');
					return Redirect::to('admin/event/create');
				}	
			}else{
				Session::flash('name',$name);
				Session::flash('description',$description);
				Session::flash('location',$location);
				Session::flash('date',$date);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Title Exists</div>');
				return Redirect::to('admin/event/create');
			}
		}else{
			Session::flash('name',$name);
			Session::flash('description',$description);
			Session::flash('location',$location);
			Session::flash('date',$date);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Title & Content Cannot Leave blank</div>');
			return Redirect::to('admin/event/create');
		}
		

	}

	function del($id){
			if($this->event->del($id)){
				$this->file->delete_eventid($id);
				Session::flash('notip','<div class="alert alert-success" role="alert">Delete Success</div>');
				return Redirect::to('admin/event');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Delete failed</div>');
				return Redirect::to('admin/event');
			}
	}
}