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
    return view('guest/home');
});

Route::get('/about', function () {
    return view('guest/about');
});

Route::get('/services', function () {
    return view('guest/servicesBlank');
});

Route::get('/contact', function () {
    return view('guest/contact');
});

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/formRegister', function(){
    return view('guest/formRegister');
});

Route::post('/register', 'UserController@register');

Route::get('/terms&condition', function (){
   return view('inc/terms&condition');
});

Route::get('/loginForm', function (){
    return view('guest/login');
});

Route::post('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

Route::get('/homeMember', function (){
    return view('member/homeMember');
});

Route::get('/servicesMember', 'ServiceController@view');

Route::get('/aboutMember', function () {
    return view('member/aboutMember');
});

Route::get('/contact', function () {
    return view('member/contactMember');
});

Route::post('/search', 'ServiceController@search');

Route::get('/serviceData', function (){return view('serviceData');
});