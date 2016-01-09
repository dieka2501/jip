<?php
class fasilitiesController extends BaseController{
	function __construct(){

	}
	function index(){
		return View::make('front.facilities');
	}
}
