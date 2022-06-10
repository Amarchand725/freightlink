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
Route::post('subscribe/store', 'WebController@subscriberStore')->name('subscribe.store');

//Admin login
Route::get('admin/login', 'Admin\AdminController@login')->name('admin.login');
Route::post('authenticate', 'Admin\AdminController@authenticate')->name('authenticate');
Route::get('/admin/profile/edit', 'Admin\AdminController@editProfile')->name('admin.profile.edit');
Route::post('/admin/profile/update', 'Admin\AdminController@updateProfile')->name('admin.profile.update');
Route::post('admin/logout', 'Admin\AdminController@logOut')->name('admin.logout');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//admin reset password
Route::get('admin/forgot_password', 'Admin\AdminController@forgotPassword')->name('admin.forgot_password');
Route::get('admin/send-password-reset-link', 'Admin\AdminController@passwordResetLink')->name('admin.send-password-reset-link');
Route::get('admin/reset-password/{token}', 'Admin\AdminController@resetPassword')->name('admin.reset-password');
Route::post('admin/change_password', 'Admin\AdminController@changePassword')->name('admin.change_password');

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

//package
Route::resource('package', 'Admin\PackageController');
