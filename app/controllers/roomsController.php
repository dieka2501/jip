<?php
class roomsController extends BaseController{
	function __construct(){

	}
	function index(){
		return View::make('front.rooms');
	}
}
