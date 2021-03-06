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

//Route::get('/','PagesController@index')->name('index');
Route::get('/hire','PagesController@hire')->name('hire');
Route::get('/my-bookings','PagesController@bookings')->middleware('customer');
Route::post('/customer/join','PagesController@customerCreate');
Route::post('/hire-bus','PagesController@hireBus');
Route::get('/','PagesController@login')->name('login');
Route::post('/login','PagesController@signin')->name('signin');
Route::post('/signout','PagesController@getLogout')->name('sign-out');
Route::get('/register','PagesController@register')->name('register');
Route::post('/register','PagesController@create')->name('create');
//Route::get('/admin','PagesController@signup')->name('signup');
Route::post('/admin/register','AdminController@adminSignup')->name('adminSignup');

//------------------Admin Routes ---------------------------------------------
Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
Route::get('/admin/members','AdminController@members');
// Show member
Route::get('/admin/members/{member}/show','AdminController@showMember');
Route::post('/admin/members/{member}/update','AdminController@updateMember');
// Approve member
Route::get('/admin/members/{member}/approve','AdminController@approveMember');
// Decline member
Route::get('/admin/members/{member}/decline','AdminController@declineMember');

Route::get('/admin/users','AdminController@users');
Route::get('/admin/loans','AdminController@getLoans');
// Manage Buses
Route::get('/admin/buses','BusController@index');
Route::post('/admin/buses','BusController@store');
Route::get('/admin/buses/{bus}/view','BusController@show');
Route::post('/admin/buses/{bus}/update','BusController@update');
Route::get('/admin/buses/{bus}/delete','BusController@destroy');
 // End Buses management
// Print Loans
Route::get('/admin/loans/print','AdminController@printLoans');
Route::get('/admin/loan-applications','AdminController@loanApplications');
// Approve and Reject Loans.
Route::get('/admin/loan-application/{application_id}/approve','LoanApprovalController@approve');
Route::get('/admin/loan-application/{application_id}/reject','LoanApprovalController@reject');
Route::get('/admin/shares','AdminController@shares');
Route::get('/admin/insurance','AdminController@insurance');
Route::get('/admin/complains','AdminController@complains');
// Print Complains
Route::get('/admin/complains/print','AdminController@printComplains');
// Bookings
Route::get('/admin/bookings','BookingController@index');
Route::get('/admin/bookings/{booking}/view','BookingController@show');
Route::get('/admin/bookings/{booking}/delete','BookingController@destroy');
// End Booking
Route::post('/postLoan/{id}','AdminController@postLoan')->name('postLoan');
Route::post('/postshare','AdminController@postshare')->name('postshare');
Route::post('/postInsurance','AdminController@postInsurance')->name('postInsurance');
Route::get('//delete/share/{id}','LoanController@Deleteshares');
Route::get('/delete/booking/{id}','AdminController@deleteBooking');
Route::get('/delete/complain/{id}','AdminController@deleteComplain');
Route::get('/delete/insurances/{id}','AdminController@deleteInsurance');
//------------------End Admin Routes ---------------------------------------------

//------------------Member Routes ---------------------------------------------
Route::prefix('member')->group(function(){
    Route::get('/','MemberController@member_dash')->name('member.index');
    Route::get('/loans','MemberController@loans');
    Route::get('/shares','MemberController@shares');
    Route::post('/shares','MemberController@addShare');
    Route::get('/insurance','MemberController@insurance');
    Route::post('/insurance','MemberController@addInsurance');
    Route::get('/loan-applications','MemberController@loanApplications');
    Route::get('/guarantor-requests','MemberController@guarantorRequests');
    Route::get('/apply','MemberController@apply');
    Route::get('/apply/get/{loan_type_id}','MemberController@leave_type');
    Route::post('/apply','MemberController@storeApplication');
    Route::get('/loan-application/{application_id}/approve','MemberController@acceptRequest');
});

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

