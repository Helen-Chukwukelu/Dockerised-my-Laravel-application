<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IPAddressController;

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

Route::get('/myip', [IPAddressController::class, 'getPublicIP']);

Route::get('/', function () {
    return 'Hey! Use /myip to get your public IP Address';
});
