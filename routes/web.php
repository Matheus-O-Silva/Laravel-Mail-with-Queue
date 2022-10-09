<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NotifyUser;
use App\Mail\laravelMail;

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

Route::get('/mail', function () {
    /*

    $user        = new stdClass();
    $user->name  = "fulano!";
    $user->email = "matheus@celerus.com";

    Mail::send(new laravelMail($user));

    return response()->json('enviado!');

    */

    return 'done';
});
