<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\helloworldcontroller;
use App\Http\Controllers\HtmlController;

Route::get('/', function () {
    return view('welcome');
});

route::get('helloworld', [helloworldcontroller::class, 'index']);
route::get('ambilfile', [helloworldcontroller::class, 'ambilfile']);
Route::get('getlorem', [HtmlController::class, 'getLorem']);