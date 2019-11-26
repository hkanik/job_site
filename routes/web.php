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

Route::get('/', function () {
    return view('welcome');
});


//applicant routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/update','HomeController@profileUpdate')->name('profile.update');
Route::post('/profile-updated','HomeController@profileUpdated')->name('profile.updated');
Route::get('/job-Post-Details/{id}','HomeController@jobPostDetails')->name('jobPostDetails');
Route::get('/apply','HomeController@apply')->name('apply');


//company routes
Route::get('/company/home', 'CompanyController@index');
Route::GET('/company/login', 'Company\LoginController@showLoginForm')->name('company.login');
Route::POST('/company/login','Company\LoginController@login');
Route::POST('/company-password/email','Company\ForgotPasswordController@sendResetLinkEmail');
Route::GET('/company-password/reset','Company\ForgotPasswordController@showLinkRequestForm');
Route::POST('/company-password/reset','Company\ResetPasswordController@reset')->name('company.password.update');
Route::GET('/company-password/reset/{token}','Company\ResetPasswordController@showResetForm')->name('company.password.reset');
Route::GET('/company/register','Company\RegisterController@showRegistrationForm')->name('company.register');
Route::POST('/company/register','Company\RegisterController@register');



Route::get('/job-post','JobPostController@index')->name('job.post');
Route::post('/add/job-post','JobPostController@addJobPost')->name('add.job.post');