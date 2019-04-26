<?php

use App\Mdl_user;
use Illuminate\Support\Facades\DB;
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
    return view('login');
});

Route::get('moodle', function () {
    $users = Mdl_user::all();
   return view('getmoodledata')->withUsers($users);
});

Route::resource('datas','GetUserController');

