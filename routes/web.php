<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NotifyUser;
use App\Jobs\newJobLaravel;

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
    
    $user        = new stdClass();
    $user->name  = "fulano!";
    $user->email = "matheus@celerus.com";

    newJobLaravel::dispatch($user)->delay(now()->addSeconds(5));

    return response()->json('enviado!');

});
