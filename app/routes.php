<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','HomeController@index');
Route::get('/product','productController@index');
Route::get('/cars/new','newCarsController@index');
Route::get('/cars/used','usedCarsController@index');
Route::get('/product/detail/{id}','productController@detail');
Route::get('/cars/new/detail/{id}','newCarsController@detail');
Route::get('/cars/used/detail/{id}','usedCarsController@detail');
Route::get('/product/category/{id}','productController@category');
Route::get('/news','newseventController@index');
Route::get('/news/detail/{id}','newseventController@detail');
Route::get('/special','specialofferController@index');
Route::get('/facilities','fasilitiesController@index');
Route::get('/contact','contactController@index');
Route::post('/contact/post','contactController@do_contact');
Route::get('/room','roomsController@index');
Route::get('/aboutus','aboutController@index');
Route::get('/cart','cartController@index');
Route::get('/cart/do','cartController@do_add');
Route::get('/cart/delete','cartController@do_delete');
Route::post('/cart/update','cartController@do_update');
Route::get('/community','communityController@index');
Route::get('/checkout','checkoutController@index');
Route::post('/checkout/do','checkoutController@do_checkout');
Route::get('/register','registerController@index');
Route::post('/register','registerController@do_register');
Route::get('/login','loginController@index');
Route::post('/login','loginController@do_login');
Route::get('/logout','loginController@do_logout');
Route::get('/payment','paymentController@index');
Route::post('/payment/search/orderid','paymentController@json_order');
Route::post('/payment/do','paymentController@do_payment');
Route::get('/member/{id}','memberController@index');
Route::post('/member/save','memberController@do_save');
Route::post('/payment/choose','choosePaymentController@index');
//Auth
Route::filter('loginAuth',function(){
	if(Session::get('login')==true){
		return Redirect::to('/admin/dashboard');
	}
});
Route::filter('userAuth',function(){
	if(Session::get('login')==false){
		return Redirect::to('/admin');
	}
});
Route::get('/admin',array('before'=>'loginAuth',function()
{
	return View::make('admin.login');
}));
Route::post('/admin/login',"adminController@get_login");

//Dashboard
Route::get('/admin/dashboard',array('before'=>'userAuth','uses'=>'dashboardController@index'));
Route::get('/admin/logout',array('before'=>'userAuth','uses'=>'adminController@logout'));

//product
Route::get('/admin/product',array('before'=>'userAuth','uses'=>'ProductController@index'));
Route::get('/admin/product/create',array('before'=>'userAuth','uses'=>'ProductController@create'));
Route::post('/admin/product/create',array('before'=>'userAuth','uses'=>'ProductController@do_create'));
Route::get('/admin/product/edit/{id}',array('before'=>'userAuth','uses'=>'ProductController@edit'));
Route::post('/admin/product/edit',array('before'=>'userAuth','uses'=>'ProductController@do_edit'));
Route::get('/admin/product/delete/{id}',array('before'=>'userAuth','uses'=>'ProductController@del'));
Route::get('/admin/product/file/delete/{id}',array('before'=>'userAuth','uses'=>'ProductController@delete_file'));

//cars
Route::get('/admin/cars',array('before'=>'userAuth','uses'=>'carsController@index'));
Route::get('/admin/cars/create',array('before'=>'userAuth','uses'=>'carsController@create'));
Route::post('/admin/cars/create',array('before'=>'userAuth','uses'=>'carsController@do_create'));
Route::get('/admin/cars/edit/{id}',array('before'=>'userAuth','uses'=>'carsController@edit'));
Route::post('/admin/cars/edit',array('before'=>'userAuth','uses'=>'carsController@do_edit'));
Route::get('/admin/cars/delete/{id}',array('before'=>'userAuth','uses'=>'carsController@del'));
Route::get('/admin/cars/file/delete/{id}',array('before'=>'userAuth','uses'=>'carsController@delete_file'));

//Category
Route::get('/admin/category',array('before'=>'userAuth','uses'=>'categoryController@index'));
Route::get('/admin/category/create',array('before'=>'userAuth','uses'=>'categoryController@create'));
Route::post('/admin/category/create',array('before'=>'userAuth','uses'=>'categoryController@do_create'));
Route::get('/admin/category/edit/{id}',array('before'=>'userAuth','uses'=>'categoryController@edit'));
Route::post('/admin/category/edit',array('before'=>'userAuth','uses'=>'categoryController@do_edit'));
Route::get('/admin/category/delete/{id}',array('before'=>'userAuth','uses'=>'categoryController@del'));

//Brand
Route::get('/admin/brand',array('before'=>'userAuth','uses'=>'brandController@index'));
Route::get('/admin/brand/create',array('before'=>'userAuth','uses'=>'brandController@create'));
Route::post('/admin/brand/create',array('before'=>'userAuth','uses'=>'brandController@do_create'));
Route::get('/admin/brand/edit/{id}',array('before'=>'userAuth','uses'=>'brandController@edit'));
Route::post('/admin/brand/edit',array('before'=>'userAuth','uses'=>'brandController@do_edit'));
Route::get('/admin/brand/delete/{id}',array('before'=>'userAuth','uses'=>'brandController@del'));

//NEWS
Route::get('/admin/news',array('before'=>'userAuth','uses'=>'newsController@index'));
Route::get('/admin/news/create',array('before'=>'userAuth','uses'=>'newsController@create'));
Route::post('/admin/news/create',array('before'=>'userAuth','uses'=>'newsController@do_create'));
Route::get('/admin/news/edit/{id}',array('before'=>'userAuth','uses'=>'newsController@edit'));
Route::post('/admin/news/edit',array('before'=>'userAuth','uses'=>'newsController@do_edit'));
Route::get('/admin/news/delete/{id}',array('before'=>'userAuth','uses'=>'newsController@del'));
Route::get('/admin/news/file/delete/{id}',array('before'=>'userAuth','uses'=>'newsController@delete_file'));

//BANNER
Route::get('/admin/banner',array('before'=>'userAuth','uses'=>'bannerController@index'));
Route::get('/admin/banner/create',array('before'=>'userAuth','uses'=>'bannerController@create'));
Route::post('/admin/banner/create',array('before'=>'userAuth','uses'=>'bannerController@do_create'));
Route::get('/admin/banner/edit/{id}',array('before'=>'userAuth','uses'=>'bannerController@edit'));
Route::post('/admin/banner/edit',array('before'=>'userAuth','uses'=>'bannerController@do_edit'));
Route::get('/admin/banner/delete/{id}',array('before'=>'userAuth','uses'=>'bannerController@del'));
Route::get('/admin/banner/file/delete/{id}',array('before'=>'userAuth','uses'=>'bannerController@delete_file'));

//Event
Route::get('/admin/event',array('before'=>'userAuth','uses'=>'eventController@index'));
Route::get('/admin/event/create',array('before'=>'userAuth','uses'=>'eventController@create'));
Route::post('/admin/event/create',array('before'=>'userAuth','uses'=>'eventController@do_create'));
Route::get('/admin/event/edit/{id}',array('before'=>'userAuth','uses'=>'eventController@edit'));
Route::post('/admin/event/edit',array('before'=>'userAuth','uses'=>'eventController@do_edit'));
Route::get('/admin/event/delete/{id}',array('before'=>'userAuth','uses'=>'eventController@del'));

//room
Route::get('/admin/room',array('before'=>'userAuth','uses'=>'roomController@index'));
Route::get('/admin/room/create',array('before'=>'userAuth','uses'=>'roomController@create'));
Route::post('/admin/room/create',array('before'=>'userAuth','uses'=>'roomController@do_create'));
Route::get('/admin/room/edit/{id}',array('before'=>'userAuth','uses'=>'roomController@edit'));
Route::post('/admin/room/edit',array('before'=>'userAuth','uses'=>'roomController@do_edit'));
Route::get('/admin/room/delete/{id}',array('before'=>'userAuth','uses'=>'roomController@del'));

//Sales
Route::get('/admin/sales',array('before'=>'userAuth','uses'=>'salesController@index'));
Route::get('/admin/sales/detail/{id}',array('before'=>'userAuth','uses'=>'salesController@detail'));
Route::post('/admin/sales/edit/status',array('before'=>'userAuth','uses'=>'salesController@change_status'));

//Contact
Route::get('/admin/message',array('before'=>'userAuth','uses'=>'contactAdminController@index'));
Route::get('/admin/message/reply/{id}',array('before'=>'userAuth','uses'=>'contactAdminController@reply'));
Route::post('/admin/message/reply',array('before'=>'userAuth','uses'=>'contactAdminController@do_reply'));
