<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin','as' => 'admin.','namespace' => 'Admin','middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
Route::resource('permissions', 'PermissionsController');


    // Roles
Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
Route::resource('roles', 'RolesController');


    // Tesstings
Route::delete('tesstings/destroy', 'TesstingController@massDestroy')->name('tesstings.massDestroy');
Route::resource('tesstings', 'TesstingController');


    // Tests
Route::delete('tests/destroy', 'TestController@massDestroy')->name('tests.massDestroy');
Route::resource('tests', 'TestController');


    // Testaaaas
Route::delete('test-aaaas/destroy', 'TestAaaaController@massDestroy')->name('test-aaaas.massDestroy');
Route::resource('test-aaaas', 'TestAaaaController');


    // Users
Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
Route::resource('users', 'UsersController');


});
