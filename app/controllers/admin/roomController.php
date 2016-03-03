<?php
class roomController Extends BaseController{
	protected $layout = "admin.template";
	function __construct(){
		$this->room 		= new room;
		$this->fasilities 	= new roomfasilities;
		$this->file 		= new roomfile;
	}
	function index(){
		View::share('big_title','room');
		if(Input::has('q')){
			$q 			= Input::get('q');
			$get_data 	= $this->room->get_search($q);
		}else{
			$q 			= "";
			$get_data 	= $this->room->get_page();
		}
		$view['q']				= $q;
		$view['get_data']		= $get_data;
		$view['notip']			= Session::get('notip');
		$this->layout->content 	= View::make('admin.room.list',$view); 
	}

	function create(){
		View::share('big_title','Create room');
		$view['name_room'] 			= Session::get('name_room');
		$view['fasilities'] 		= Session::get('fasilities');
		$view['ids']	 			= Session::get('ids');
		$view['max_person']			= Session::get('max_person');
		$view['qty_room']			= Session::get('qty_room');
		$view['status']	 			= Session::get('status');
		$view['notip']	 			= Session::get('notip');
		$view['url']				= Config::get('app.url').'public/admin/room/create';
		$this->layout->content 		= View::make('admin.room.form',$view); 	
	}
	function do_create(){
		$path 		= base_path().'/aset/upload';
		if(Input::has('name_room') && Input::has('fasilities')){
			$name_room 			= Input::get('name_room');
			$fasilities 		= Input::get('fasilities');
			$max_person 		= Input::get('max_person');
			$qty_room 			= Input::get('qty_room');
			$status 			= Input::get('status');
			$get_title 	= $this->room->get_title($name_room);
			if(count($get_title) == 0){
				

				$data['name_room'] 		= $name_room;
				$data['facilities']		= $fasilities;
				$data['qty_room'] 		= $qty_room;
				$data['max_person']		= $max_person;
				$data['room_status'] 	= $status;
				$data['date_insert']	= date('Y-m-d H:i:s');	
				$idinsert = $this->room->add($data);
				if( $idinsert > 0){
					if(Input::hasFile('image')){
						$image 		= Input::file('image');
						foreach ($image as $images) {
							if(!is_null($images)){
								$filename 	= $images->getClientOriginalName();
								$images->move($path,$filename);
								$files['room_id']		= $idinsert;
								$files['file']			= $filename;	
								$files['date_insert']	= date('Y-m-d H:i:s');
								$this->file->add($files);
							}
						}
						
						// $data['image'] 			= $filename;
					}else{
						$filename = '';
					}
					if(Input::has('facilities')){
						$facilities = Input::get('facilities');
						$fas_image 	= Input::file('image_facility');
						$jj 		= 0;
						foreach ($facilities as $fac) {
							if(!is_null($fas_image[$jj])){
								$filefac = $fas_image[$jj]->getClientOriginalName();
								$fas_image[$jj]->move($path,$filefac);
							}else{
								$filefac = "";
							}
							$faci['room_id'] 	= $idinsert;
							$faci['facility'] 	= $fac;
							$faci['icon'] 		= $filefac;
							$faci['date_insert']	= date('Y-m-d H:i:s');
							$this->fasilities->add($faci);
							$jj++;
						}
					}
					Session::flash('notip','<div class="alert alert-success" role="alert">Insert Success</div>');
					return Redirect::to('admin/room');	
				}else{
					Session::flash('name_room',$name_room);
					Session::flash('fasilities',$fasilities);
					Session::flash('max_person',$max_person);
					Session::flash('qty_room',$qty_room);
					Session::flash('status',$status);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Insert Failed</div>');
					return Redirect::to('admin/room/create');
				}	
			}else{
				Session::flash('name_room',$name_room);
				Session::flash('fasilities',$fasilities);
				Session::flash('max_person',$max_person);
				Session::flash('qty_room',$qty_room);
				Session::flash('status',$status);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Name Room Exists</div>');
				return Redirect::to('admin/room/create');
			}
		}else{
			Session::flash('name_room',$name_room);
			Session::flash('fasilities',$fasilities);
			Session::flash('max_person',$max_person);
			Session::flash('qty_room',$qty_room);
			Session::flash('status',$status);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Name Room & fasilities Cannot Leave blank</div>');
			return Redirect::to('admin/room/create');
		}
		

	}

	function edit($id){
		View::share('big_title','Edit room');
		$get_data 				= $this->room->get_id($id);
		$get_fasilities 		= $this->fasilities->get_idroom($id);
		$view['name_room'] 		= $get_data->name_room;
		$view['fasilities'] 	= $get_data->facilities;
		$view['ids']	 		= $id;
		$view['max_person']		= $get_data->max_person;
		$view['qty_room']		= $get_data->qty_room;
		$view['status']	 		= $get_data->status;
		$view['count']	 		= count($get_fasilities);
		$view['facilities']	 	= $get_fasilities;
		$view['notip']	 		= Session::get('notip');
		$view['url']			= Config::get('app.url').'public/admin/room/edit';
		$this->layout->content 	= View::make('admin.room.edit',$view); 	
	}

	function do_edit(){
		$path 		= base_path().'/aset/upload/';
		if(Input::has('name_room') && Input::has('fasilities')){
			$name_room 			= Input::get('name_room');
			$fasilities 		= Input::get('fasilities');
			$max_person 		= Input::get('max_person');
			$qty_room 			= Input::get('qty_room');
			$status 			= Input::get('status');
			$ids 				= Input::get('ids');
			if(true){
				if(Input::hasFile('image')){		
					$image 		= Input::file('image');
					$this->file->del_roomid($ids);
					foreach ($image as $images) {
						$filename 	= $images->getClientOriginalName();
						$images->move($path,$filename);
						$files['file'] 			= $filename;
						$files['room_id'] 		= $ids;
						$files['date_insert'] 	= date('Y-m-d H:i:s');
						$files['date_update'] 	= date('Y-m-d H:i:s');
						$this->file->add($files);
					}
					
				}else{
					$filename = '';
				}
				if(Input::has('facilities')){
					$this->fasilities->del_idroom($ids);
					$facilities = Input::get('facilities');
					$fas_image 	= Input::file('image_facility');
					$jj 		= 0;
					foreach ($facilities as $fac) {
						if(!is_null($fas_image[$jj]) ){
							$filefac = $fas_image[$jj]->getClientOriginalName();
							$fas_image[$jj]->move($path,$filefac);
						}else{
							$filefac = "";
						}
						if($fac != ""){
							$faci['room_id'] 	= $ids;
							$faci['facility'] 	= $fac;
							$faci['icon'] 		= $filefac;
							$faci['date_insert']	= date('Y-m-d H:i:s');
							$this->fasilities->add($faci);	
						}
						
						$jj++;
					}
				}
				$data['name_room'] 		= $name_room;
				$data['facilities']		= $fasilities;
				$data['qty_room'] 		= $qty_room;
				$data['max_person']		= $max_person;
				$data['room_status'] 	= $status;
				$data['date_update']	= date('Y-m-d H:i:s');	
				
				if($this->room->edit($ids,$data)){
					Session::flash('notip','<div class="alert alert-success" role="alert">Update Success</div>');
					return Redirect::to('admin/room');	
				}else{
					Session::flash('name_room',$name_room);
					Session::flash('fasilities',$fasilities);
					Session::flash('max_person',$max_person);
					Session::flash('qty_room',$qty_room);
					Session::flash('status',$status);
					Session::flash('notip','<div class="alert alert-danger" role="alert">Update Failed</div>');
					return Redirect::to('admin/room/create');
				}	
			}else{
				Session::flash('name_room',$name_room);
				Session::flash('fasilities',$fasilities);
				Session::flash('max_person',$max_person);
				Session::flash('qty_room',$qty_room);
				Session::flash('status',$status);
				Session::flash('notip','<div class="alert alert-danger" role="alert">Name Room Exists</div>');
				return Redirect::to('admin/room/create');
			}
		}else{
			Session::flash('name_room',$name_room);
			Session::flash('fasilities',$fasilities);
			Session::flash('max_person',$max_person);
			Session::flash('qty_room',$qty_room);
			Session::flash('status',$status);
			Session::flash('notip','<div class="alert alert-danger" role="alert">Name Room & Fasilities Cannot Leave blank</div>');
			return Redirect::to('admin/room/create');
		}
		

	}

	function del($id){
			if($this->room->del($id)){
				$this->file->del_roomid($id);
				$this->fasilities->del_idroom($id);
				Session::flash('notip','<div class="alert alert-success" role="alert">Delete Success</div>');
				return Redirect::to('admin/room');
			}else{
				Session::flash('notip','<div class="alert alert-danger" role="alert">Delete failed</div>');
				return Redirect::to('admin/room');
			}
	}
}