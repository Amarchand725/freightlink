<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WebController@index');
Route::get('contact', 'WebController@contact')->name('contact');
Route::get('about-us', 'WebController@aboutUs')->name('about-us');
Route::get('benefits', 'WebController@benefits')->name('benefits');
Route::get('networks', 'WebController@network')->name('networks');
Route::get('faqs', 'WebController@faqs')->name('faqs');
Route::post('register/store', 'WebController@store')->name('register.store');
Route::get('thanks', 'WebController@thanks')->name('thanks');
Route::post('contact/store', 'WebController@contactStore')->name('contact.store');
Route::get('subscribe/store', 'WebController@subscriberStore')->name('subscribe.store');

//Admin login
Route::get('admin/login', 'Admin\AdminController@login')->name('admin.login');
Route::post('admin/authenticate', 'Admin\AdminController@authenticate')->name('admin.authenticate');
Route::get('/admin/profile/edit', 'Admin\AdminController@editProfile')->name('admin.profile.edit');
Route::post('/admin/profile/update', 'Admin\AdminController@updateProfile')->name('admin.profile.update');
Route::post('admin/logout', 'Admin\AdminController@logOut')->name('admin.logout');

//admin reset password
Route::get('admin/forgot_password', 'Admin\AdminController@forgotPassword')->name('admin.forgot_password');
Route::get('admin/send-password-reset-link', 'Admin\AdminController@passwordResetLink')->name('admin.send-password-reset-link');
Route::get('admin/reset-password/{token}', 'Admin\AdminController@resetPassword')->name('admin.reset-password');
Route::post('admin/change_password', 'Admin\AdminController@changePassword')->name('admin.change_password');

Route::get('subscribe/index', 'Admin\AdminController@subscribe')->name('subscribe.index');

// Route::get('download/index', 'Admin\DownloadController@index')->name('download.index');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//user login
Route::post('user/authenticate', 'WebController@authenticate')->name('user.authenticate');

//user reset password
Route::get('user/forgot_password', 'WebController@forgotPassword')->name('user.forgot_password');
Route::get('user/send-password-reset-link', 'WebController@passwordResetLink')->name('user.send-password-reset-link');
Route::get('user/reset-password/{token}', 'WebController@resetPassword')->name('user.reset-password');
Route::post('user/change_password', 'WebController@changePassword')->name('user.change_password');

//Home
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Roles
Route::resource('role', 'Admin\RoleController');

//users
Route::resource('user', 'Admin\UserController');

//permissions
Route::resource('permission', 'Admin\PermissionController');

//setting
Route::resource('setting', 'Admin\SettingController');

//sliders
Route::resource('slider', 'Admin\SliderController');

//testimonial
Route::resource('testimonial', 'Admin\TestimonialController');

//service
Route::resource('service', 'Admin\ServiceController');

//pages settings
Route::resource('page', 'Admin\PageController');
Route::resource('page_setting', 'Admin\PageSettingController');

//mail settings
Route::resource('mail_setting', 'Admin\MailSettingController');

//package
Route::resource('package', 'Admin\PackageController');

//partner
Route::resource('partner', 'Admin\PartnerController');

//benefit
Route::resource('benefit', 'Admin\BenefitController');

//expands possibility
Route::resource('expands_possibility', 'Admin\ConnectExpandsPossibilityController');

//faqs
Route::resource('faq', 'Admin\FaqController');

//downloads
Route::resource('download', 'Admin\DownloadController');

//Company
Route::resource('company', 'Admin\CompanyController');

//Network
Route::resource('network', 'Admin\NetworkController');