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

/* Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/index', 'static_controller@index');

Route::get('/amigos', 'PagesController@amigos');

Route::get('/sobre', 'PagesController@sobre');

Route::get('/candidate_listing', 'PagesController@candidateListing');

Route::get('/company_listing_single', 'PagesController@companyListingSingle');

Route::get('/add_postin', 'PagesController@addPostin');

Route::get('/register', 'PagesController@register');

Route::get('/listing_right', 'PagesController@listingRight');

Route::get('/listing_left', 'PagesController@listingLeft');

Route::get('/blog_single_right', 'PagesController@blogSingleRight');

Route::get('/blog_single_left', 'PagesController@blogSingleLeft');

Route::get('/blog_right', 'PagesController@blogRight');

Route::get('/blog_left', 'PagesController@blogLeft');

Route::get('/listing_single', 'PagesController@listingSingle');

Route::get('/404error', 'PagesController@error404');

Route::get('/about', 'PagesController@about');

Route::get('/pricing', 'PagesController@pricing');

Route::get('/candidate_profile', 'PagesController@candidateProfile');

Route::get('/company_listing', 'PagesController@companyListing');

Route::get('/index_map', 'PagesController@indexMap');