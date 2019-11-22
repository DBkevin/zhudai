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

//子域名设置为m.laravel.com 命名空间为 Admin
Route::group(['domain' => "m.huiqushi.cn"],function (){
    Route::get('/','MindexController@index');
    Route::get('/product','MProductsController@index');
    Route::get('/product/{product}','MProductsController@show');
    Route::get('sku/{id}', 'ProductController@showSku');
});

Route::get('/', 'IndexController@index');
Auth::routes();
Route::resource('categories', 'CategoryController');
Route::get('product','ProductController@index');
Route::get("product/{product}",'ProductController@show');
//Route::get('product-sku{id}','ProductController@showSku');
Route::get('sku/{id}', 'ProductController@showSku');
Route::post("msg",'MsgController@store');
Route::get('recycle','recycleController@index');
Route::post('recycle','reController@store');
Route::view('promotion', 'promotion.index');
Route::get('news','NewsController@index');
Route::get("news/{news}",'NewsController@show');
Route::get('article/{article}','ArticleController@show')->where(['article'=>'[0-9]+']);
Route::get('article/about','ArticleController@about');
Route::get('article/about','ArticleController@about');
Route::get('article/concat','ArticleController@concat');
Route::get('article/cooperation','ArticleController@cooperation');
Route::get('article/news','ArticleNewController@index');
Route::get('article/news/{articleNew}','ArticleNewController@show');
/*
// 用户身份验证相关的路由
Route::get('login', 'Auth\Loger@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
*/
