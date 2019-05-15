<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');



//Route::resource('vouchers','admin\VoucherController');


  //{{route('admin.products.create')}}
  Route::get('/admin', 'AdminController@admin_dashboard');  
  Route::get('/accounts', 'AccountController@show');

  //Vouchers
  Route::get('/vouchers/list','admin\VoucherController@index');
  Route::get('/vouchers/create','admin\VoucherController@create');
  Route::post('/vouchers/store/','admin\VoucherController@store');
  Route::get('/vouchers/edit/{id}','admin\VoucherController@edit');
  Route::patch('/vouchers/update/{id}','admin\VoucherController@update');

  //Products
  Route::get('/product/list','admin\ProductController@index');
  Route::get('/product/edit/{id}','admin\ProductController@edit');
  Route::get('/product/create','admin\ProductController@create');
  Route::post('/product/store','admin\ProductController@store');
  Route::patch('/product/update/{id}','admin\ProductController@update');

  Route::get('/product/addVoucher/{id}','admin\ProductController@AddVoucher');
  Route::get('/product/viewVoucher/{id}','admin\ProductController@viewVouchers');

  //Patients
  Route::get('/patient/list','admin\PatientController@index');
  Route::get('/patient/create','admin\PatientController@create');
  Route::get('/patient/edit/{id}','admin\PatientController@edit');
  Route::post('/patient/store','admin\PatientController@store');
  Route::patch('/patient/update/{id}','admin\PatientController@update');

  Route::get('/patient/viewVouchers/{id}','admin\PatientController@viewVouchers');

  Route::get('/patient/addProduct/{id}','admin\PatientController@addProduct');

  Route::post('/patient/storeProduct/{id}','admin\PatientController@storeProduct');

  //Patient Details
  Route::get('/patientDetails/create','admin\PatientDetailsController@create');
  Route::post('/patientDetails/store','admin\PatientDetailsController@store');
  Route::get('/patientDetails/show/{id}','admin\PatientDetailsController@show');
  Route::get('/patientDetails/edit/{id}','admin\PatientDetailsController@edit');
  Route::patch('/patientDetails/update/{id}','admin\PatientDetailsController@update');

  //Unique Voucher
  Route::get('/uniqueVouchers/list','admin\UniqueVoucherController@index');
  Route::get('/uniqueVouchers/redeem/{id}','admin\UniqueVoucherController@redeem');


  //Benefits
  Route::get('/benefits/create','admin\BenefitsController@create');
  Route::post('/benefits/store/{id}','admin\BenefitsController@store');


  Route::get('/patient/edit','admin\PatientController@edit');












Route::group(['middleware' => 'admin'], function () {


});

Route::group(['middleware' => 'reception'], function () {

});


Route::group(['middleware' => 'marking'], function () {
  
});








