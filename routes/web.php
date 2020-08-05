<?php

use Illuminate\Support\Facades\Route;
use App\Mail\HRMail;
use Illuminate\Support\Facades\Mail;
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

Route::post('/bvn/verify', 'BvnController@verify');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/jobs/create', 'JobController@create');

Route::post('/jobs/store', 'JobController@store')->name('jobs.store');

Route::get('/jobs/{id}/verify', 'VerifyJobController@show');
Route::post('/jobs/{id}/verify', 'VerifyJobController@store')->name('jobs.verify');
Route::get('/jobs/verify', 'VerifyJobController@index');

Route::get('/email', function () {
	//  Mail::to('hello@example.com')->send(new HRMail);
	return new HRMail; 
});
