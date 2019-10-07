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


    // Testaaaas
Route::apiResource('test-aaaas', 'TestAaaaApiController');


    // Users
Route::apiResource('users', 'UsersApiController');


});
