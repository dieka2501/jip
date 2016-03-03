<?php
class specialofferController extends BaseController{
	function __construct(){

	}
	function index(){
		return View::make('front.specialoffers');
	}
}
