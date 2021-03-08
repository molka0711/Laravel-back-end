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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::post('postLogin','Authcontroller@postLogin');
Route::post('postRegister','Authcontroller@postRegister');
Route::get('/','backcontroller@index');
Route::get('logout','Authcontroller@logout');

Route::get('/home',function(){
    return view('home');
});
Route::get('/app-calendar',function(){
    return view('app-calendar');
});
Route::get('/datatable',function(){
    return view('datatable');
});
Route::get('/app-chat',function(){
    return view('app-chat');
});
Route::get('/ticketlist',function(){
    return view('ticketlist');
});

Route::get('/register',function(){
    return view('register');
});
Route::get('/front/home','homecontroller@index');

Route::get('/front/home', function () {
    return view('front.home');
});

Route::get('/front/login', function () {
    return view('front.login');
});

Route::get('/front/register', function () {
    return view('front.register');
});

Route::get('/front/faq', function () {
    return view('front.faq');
});

Route::get('/front/check-out', function () {
    return view('front.check-out');
});

Route::get('/front/shopping-cart', function () {
    return view('front.shopping-cart');
});

Route::get('/front/blog-details', function () {
    return view('front.blog-details');
});

Route::get('/front/shop', function () {
    return view('front.shop');
});

Route::get('/front/blog', function () {
    return view('front.blog');
});

Route::get('/front/contact', function () {
    return view('front.contact');
});

Route::get('/front/product', function () {
    return view('front.product');
});

Route::get('/front/account', function () {
    return view('front.account');
});

Route::get('/front/private-informations', function () {
    return view('front.private-informations');
});

Route::get('/front/my-orders', function () {
    return view('front.my-orders');
});

Route::get('/front/my-wishlist', function () {
    return view('front.my-wishlist');
});

Route::get('/front/my-opinions', function () {
    return view('front.my-opinions');
});

Route::get('/front/change-pwd', function () {
    return view('front.change-pwd');
});

Route::get('/front/adresses', function () {
    return view('front.adresses');
});
Route::get('/front/services', function () {
    return view('front.services');
});

Route::get('/front/services-details', function () {
    return view('front.services-details');
});

Route::get('/front/order-detail', function () {
    return view('front.order-detail');
});