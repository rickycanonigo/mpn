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

// testers
// Route::get('api/getPromissoryCount','Api\Query@getPromissoryCount');
Route::get('api/acct_no','Api\Query@getacct_no');
// Route::get('api/ssi_id','Api\Query@getssi_id');
// Route::get('api/contact','Api\Query@getContactNumber');
// Route::get('api/email','Api\Query@getEmailAccount');
// Route::get('api/getTotalBill','Api\Query@getTotalBill');
Route::get('api/getOldAccounts','Api\Query@getOldAccounts');
// Route::get('api/getFullName','Api\Query@getFullName');
// Route::get('api/student','Api\Query@loadStudents');
// Route::get('api/getFeeSchedule','Api\Query@getFeeSchedule');
// Route::get('api/getAllFeeSchedule','Api\Query@getAllFeeSchedule');
// End Testers

// Default Routes
Route::get('/login', 'RouteController@login')->name('login');
// Authenticated Routes
Auth::routes();
Route::get('/register', 'RouteController@register')->name('register');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/dashboard', 'RouteController@index')->name('dashboard');
Route::get('/promissory', 'RouteController@promissory')->name('promissory');
Route::get('/inbox', 'RouteController@inbox')->name('inbox');
Route::get('/settings', 'RouteController@settings')->name('settings');
Route::get('/statistics', 'RouteController@statistics')->name('statistics');
Route::get('/notification', 'RouteController@notification')->name('notification');
// Student Transactions
Route::get('load/student','StudentInfoController@loadInfo');
Route::get('search/student','SearchController@searchStudent');	
// Getting all studennt info
Route::get('get/promissoryCount','StudentController@PromissoryCount');
Route::get('get/totalbill','StudentController@student_total_bill');
Route::get('get/oldaccounts','StudentController@student_old_accounts');
Route::get('get/contact','StudentController@student_contact_number');
Route::get('get/email','StudentController@student_email_account');
Route::get('get/fullname','StudentController@student_fullname');
// Necesarry for Addings of promissorynote
Route::post('/post/image','StudentController@validate_image')->name('post.validate_image');
Route::post('add/promissory','StudentController@add_student_promissory_note');
Route::get('get/promissory','StudentController@get_student_promissory_note');
// optional, for data viewing purposes
Route::get('get/FeeSchedule','StudentController@student_fee_schedule');
Route::get('get/AllFeeSchedule','StudentController@fee_schedules');
Route::get('get/pnstat','StatisticsController@load_statistics_data');