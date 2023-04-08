<?php

use App\Http\Controllers\ThongController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ThongController::class, 'ddosTesting']);

Route::get('thong', [ThongController::class, 'thong']);

Route::match(['get', 'post'], '/import', [ThongController::class, 'testImport']);

Route::match(['get', 'post'], '/export', [ThongController::class, 'testExport']);
