<?php

use App\Models\Project;
use App\Models\Subscriber;
use Illuminate\Http\Request;
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
})->name('welcome');


Route::post('/subscribe', function (Request $request) {
    Subscriber::create([
        'email' => $request->email
    ]);

    return redirect('/');
})->name('subscribe');

Route::post('/project', function (Request $request) {
    Project::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'content' => $request->content
    ]);

    return redirect('/');
})->name('project');
