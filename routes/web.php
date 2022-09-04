<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/user-manage', [App\Http\Controllers\Admin\UserManageController::class, 'userData']);
    Route::post('/user-manage-block/{id}', [App\Http\Controllers\Admin\UserManageController::class, 'blockUser']);

    Route::get('/post-management', [App\Http\Controllers\Admin\PostManagementController::class, 'postData']);
    Route::delete('/post-management-delete/{id}', [App\Http\Controllers\Admin\PostManagementController::class, 'deletePost']);

    Route::get('/organization-management', [App\Http\Controllers\Admin\OrganizationManagementController::class, 'orgData']);
    Route::post('/save-organization', [App\Http\Controllers\Admin\OrganizationManagementController::class, 'store']);
    Route::get('/organization-management/{id}', [App\Http\Controllers\Admin\OrganizationManagementController::class, 'edit']);
    Route::put('/organization-management-update/{id}', [App\Http\Controllers\Admin\OrganizationManagementController::class, 'update']);
    Route::delete('/organization-management-delete/{id}', [App\Http\Controllers\Admin\OrganizationManagementController::class, 'delete']);
});
