<?php

use App\Http\Controllers\AuthorizationsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GroupsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(UsersController::class)->middleware(['SetResponseHeaders', 'Cors'])->prefix('users')->group(function () {
	Route::get('/', 'show')->name('users.show');
});

Route::controller(AuthorizationsController::class)->middleware(['SetResponseHeaders', 'Cors'])->prefix('users')->group(function () {
	Route::post('/registration', "registration")->name('users.registration');
	Route::post('/login', 'login')->name('users.login');
	Route::post('/logout', 'logout')->name('users.logout');
});

Route::controller(GroupsController::class)->middleware(['SetResponseHeaders', 'Cors'])->prefix('groups')->group(function () {
	Route::post('/', "store")->name('groups.store');
	Route::post('/addUser', "addUser")->name('groups.addUser');
	Route::post('/leaveUser', "leaveUser")->name('groups.leaveUser');
	Route::get('/', "index")->name('groups.index');
	Route::post('/startLottery', 'startLottery')->name('groups.startLottery');
	Route::get('/getToGift', 'getToGift')->name('groups.getToGift');
});

Route::controller(EventsController::class)->middleware(['SetResponseHeaders', 'Cors'])->prefix('events')->group(function () {
	Route::get('/', "index")->name('events.index');
	Route::post('/', 'store')->name('events.store');
});
