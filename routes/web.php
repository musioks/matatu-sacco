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

Route::get('/','PagesController@index')->name('index');
Route::get('/hire','PagesController@hire')->name('hire');
Route::get('/login','PagesController@login')->name('login');
Route::post('/login','PagesController@signin')->name('signin');
Route::post('/signout','PagesController@getLogout')->name('sign-out');
Route::get('/register','PagesController@register')->name('register');
Route::post('/register','PagesController@create')->name('create');
Route::get('/admin','PagesController@signup')->name('signup');
Route::post('/admin','PagesController@adminSignup')->name('adminSignup');

//------------------Admin Routes ---------------------------------------------
Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
Route::get('/admin/members','AdminController@members')->name('members');
Route::get('/admin/users','AdminController@users')->name('users');
Route::get('/admin/loan','AdminController@approveLoan')->name('admin_loan');
Route::get('/admin/shares','AdminController@shares')->name('shares');
Route::get('/admin/insurance','AdminController@insurance')->name('insurances');
Route::get('/admin/complains','AdminController@complains')->name('admin_complains');
Route::get('/admin/bookings','AdminController@bookings')->name('bookings');
Route::post('/postLoan/{id}','AdminController@postLoan')->name('postLoan');
Route::post('/postshare','AdminController@postshare')->name('postshare');
Route::post('/postInsurance','AdminController@postInsurance')->name('postInsurance');
Route::get('//delete/share/{id}','LoanController@Deleteshares');
Route::get('/delete/booking/{id}','AdminController@deleteBooking');
Route::get('/delete/complain/{id}','AdminController@deleteComplain');
Route::get('/delete/insurances/{id}','AdminController@deleteInsurance');
//------------------End Admin Routes ---------------------------------------------

//------------------Member Routes ---------------------------------------------
Route::get('/member','MemberController@member_dash')->name('member.index');
//------------------End Member Routes ---------------------------------------------

//=========================Money loan routes======================================
Route::get('/loan/balance/{id}','LoanController@loanBalance')->name('loan_balance');
Route::get('/share/balance/{id}','LoanController@shareBalance')->name('share_balance');
Route::get('/insurance/balance/{id}','LoanController@insuranceBalance')->name('insurance_balance');
Route::get('/loan/apply/','LoanApplicationController@loanApply')->name('loan_apply');
Route::post('/loan/apply/','LoanApplicationController@postLoanApply')->name('loan_apply');
Route::get('/loan/status/{id}','LoanApplicationController@loanStatus')->name('loan_status');
Route::get('/loan/Requests/{id}','LoanApplicationController@request')->name('request');
//========================end loan routes=========================================
//======================complains route==========================================
Route::get('/complains','ComplainController@index')->name('complains');
Route::post('/complains','ComplainController@postComplain')->name('complain.create');
//=======================Bookings routes=========================================
Route::resource('/bookings','BookingController');

