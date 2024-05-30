<?php

use Illuminate\Support\Facades\Route;
use Rats\Zkteco\Lib\ZKTeco;

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
    $zk = new ZKTeco('192.168.1.201');
    $zk->connect(); 
    return $zk->deviceName(); 
    return view('welcome');
});
