<?php

use App\Http\Controllers\TestController;
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
Auth::routes();

use Illuminate\Http\Request;
 
Route::get('/test/request', function (Request $request) {
    //
    $input = $request->all();
    echo implode(',',$input);
    echo $input['t'];
});

Route::get('/test/join', function (Request $request) {
    //
    $input = ["Umakant", "Vashishtha"];

    echo TestController::joinStatusesForInClause($input);
});


Route::get('/test/json/{name}', [TestController::class, 'testJson'])->name('test.json');
Route::get('/test/entity', [TestController::class, 'getEntity'])->name('test.entity');

Route::get('/test', [TestController::class, 'test'])->name('test');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
