<?php

use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, 'routes'])
    ->name('route information')
    ->withoutMiddleware('api');

/*
| Examples:
| Route::get('/example', [Controller::class, 'example'])->name('example route');
| Route::get('/error', [Controller::class, 'error'])->name('error route');
*/

Route::get('/vehicles', [VehiclesController::class, 'get'])->name('get vehicles list');
Route::get('/vehicle/{id}', [VehiclesController::class, 'find'])->name('get a specified vehicle');
