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
    Route::get('/post-management', [App\Http\Controllers\Admin\PostManagementController::class, 'postData']);
    Route::get('/organization-management', [App\Http\Controllers\Admin\OrganizationManagementController::class, 'orgData']);
    Route::post('/save-organization', [App\Http\Controllers\Admin\OrganizationManagementController::class, 'store']);
});
