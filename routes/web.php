<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('blog', function () {
    return view('pages.blog');
})->name('blog');
Route::get('careers', function () {
    return view('pages.careers');
})->name('careers');
Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/pages/{name}', function ($name) {
    switch ($name) {
        case 'about':
            return view('pages.about');
            break;
        case 'services':
            return view('pages.services');
            break;
        
        default:
            abort(404);
            break;
    }
})->name("page");

Route::get('/services/{name}', function ($name) {
    // switch ($name) {
    //     case 'cloud-computing':
    //         return view('pages.services-detail',$name);
    //         break;
    //     case 'services':
    //         return view('pages.services');
    //         break;
        
    //     default:
    //         abort(404);
    //         break;
    // }
    return view('pages.services-detail',['name'=>$name]);
})->name("service");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
