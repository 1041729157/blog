<?php

// web 前端
Route::get('/', 'StaticPagesController@index')->name('index');
Route::get('tour', 'StaticPagesController@tour')->name('tour');
Route::get('gallery', 'StaticPagesController@gallery')->name('gallery');
Route::get('testimonial', 'StaticPagesController@testimonial')->name('testimonial');
Route::get('contact', 'StaticPagesController@contact')->name('contact');

// 详情页
Route::get('Single-page', 'SinglepagesController@details')->name('details');


/*Auth::routes();*/
// 登陆
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 注册
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码找回
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
/*Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');*/
Route::get('users/{user}/edit-password', 'UsersController@edit_password')->name('users.edit_password');
Route::patch('user/{user}/update-password', 'UsersController@update_password')->name('users.update_password');

/*// 关注人页
Route::get('users/{user}/followings', 'UsersController@followings')->name('users.followings');
// 粉丝页
Route::get('users/{user}/followers', 'UsersController@followers')->name('users.followers');*/

// 关注
Route::post('users/{user}/store_follower', 'FollowersController@store_follower')->name('users.store_follower');
// 取消关注
Route::delete('users/{user}/destroy_follower', 'FollowersController@destroy_follower')->name('users.destroy_follower');

Route::get('blogs', 'BlogsController@blog')->name('blog');
Route::get('blogs/{blog}/show', 'BlogsController@show')->name('blogs.show');
Route::get('blogs/create', 'BlogsController@create')->name('blogs.create');
Route::post('blogs/create', 'BlogsController@store')->name('blogs.store');
Route::get('blogs/{blog}/update', 'BlogsController@edit')->name('blogs.edit');
/*Route::patch('blogs/update/{user}', 'BlogsController@update')->name('blogs.update');*/
Route::post('upload_image', 'BlogsController@uploadImage')->name('blogs.upload_image');
Route::resource('blogs', 'BlogsController', ['only' => ['update', 'destroy']]);

Route::post('replies', 'RepliesController@reply')->name('replies.reply');
Route::delete('replies/{reply}', 'RepliesController@destroy')->name('replies.destroy');
/*Route::resource('replies', 'RepliesController', ['only' => ['destroy']]);*/

// 回复通知列表
Route::get('notifications', 'NotificationsController@index')->name('notifications.index');

Route::get('permission-denied', 'StaticPagesController@permissionDenied')->name('permission-denied');

Route::get('contacts/{user}', 'ContactsController@index')->name('contacts.index');
// 未登录用户留言
Route::post('contact', 'ContactsController@create')->name('contacts.create');
// 登陆用户留言
Route::post('contacts', 'ContactsController@stroy')->name('contacts.stroy');
Route::get('contacts/{contact}/index', 'ContactsController@index')->name('contacts.index');