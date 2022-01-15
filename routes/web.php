<?php
use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','PublicController@index');
Route::get('our-story','PublicController@ourStory');
Route::get('earn','PublicController@earn');
Route::get('pricing','PublicController@pricing');
Route::get('blog','BlogController@home');
Route::get('terms','PublicController@terms');
Route::get('privacy','PublicController@privacy');
Route::get('faqs','PublicController@faqs');
Route::get('contact','PublicController@contact');

Route::get('customer-sign-up','PublicController@customerSignUp');
