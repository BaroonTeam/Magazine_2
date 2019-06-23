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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('/channels', 'ChannelsController');
Route::resource('/admin/channels', 'AdminChannelsController', ['as'=>'admin']);
Route::resource('/channels/{channel_id}/magazines', 'MagazinesController');
Route::resource('/admin/magazines', 'AdminMagazinesController', ['as'=>'admin']);
Route::resource('/magazines/{magazine_id}/articles', 'ArticlesController');
Route::get('/articles/create', 'ArticlesController@createArticle')->name('create_article');
Route::resource('/admin/articles', 'AdminArticlesController', ['as'=>'admin']);
Route::resource('/admin/categories', 'AdminCategoriesController', ['as'=>'admin']);
Route::resource('/admin/users', 'AdminUsersController', ['as'=>'admin']);
Route::get('/categories/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('/articles/{article_id}/photos', 'PhotosController@create')->name('photos.create');
Route::post('/articles/{article_id}/photos', 'PhotosController@store')->name('photos.store');
Route::resource('/admin/sponsors', 'AdminSponsorsController', ['as'=>'admin']);
Route::get('/admin/magazines/{magazine_id}/sponsors', 'AdminMagazinesController@addSponsor')->name('magazine.sponsors');
Route::put('/admin/magazines/{magazine_id}/attach/{sponsor_id}', 'AdminMagazinesController@attachSponsor')->name('sponsor.attach');
Route::put('/admin/magazines/{magazine_id}/detach/{sponsor_id}', 'AdminMagazinesController@detachSponsor')->name('sponsor.detach');
Route::resource('/articles/{article_id}/comments', 'CommentsController');
Route::resource('/admin/comments', 'AdminCommentsController', ['as'=>'admin']);
Route::resource('/comments/{comment_id}/replies', 'RepliesController');
Route::resource('/admin/replies', 'AdminRepliesController', ['as'=>'admin']);
Route::post('/pdf', 'MagazinesController@show_pdf')->name('pdf.show');
Route::get('/contact', 'ContactsController@index');
Route::get('/archives/{year}/{month}', 'ArticlesController@show_archives')->name('archives.show');
// Route::get('/channels/{id}/magazines/create', 'MagazinesController@create');