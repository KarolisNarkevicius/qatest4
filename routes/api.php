<?php


Route::group(['prefix' => 'v1','as' => 'api.','namespace' => 'Api\V1\Admin','middleware' => ['auth:api']], function () {
        // Permissions
Route::apiResource('permissions', 'PermissionsApiController');


    // Roles
Route::apiResource('roles', 'RolesApiController');


    // Tesstings
Route::apiResource('tesstings', 'TesstingApiController');


    // Tests
Route::apiResource('tests', 'TestApiController');


    // Users
Route::apiResource('users', 'UsersApiController');


});
