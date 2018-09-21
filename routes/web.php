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

Route::get('list', function(){
    return view('layout.main');
});

Route::get('menu', function(){
    return view('menu.MenuList');
});

Route::get('search', function(){
    return view('search.search');
});

Route::get('imglist', 'ImageController@getImageList');

Route::post('getbysearch','PhotographerController@getPhotographerBySearch');

Route::get('photolist/all', 'PhotographerController@getPhotographerList');

Route::post('photolist/{id}', 'PhotographerController@getPhotographerById');

Route::get('photographer/{id}', function($id){
     return view('photographer.PhotographerProflie',compact("id"));
});

Route::get('getselect', 'SearchController@getSelect');

Route::get('getAlbum/{id}', 'ImageController@getAlbumById');

Route::get('getImageList/{id}', 'ImageController@getImageListById');
