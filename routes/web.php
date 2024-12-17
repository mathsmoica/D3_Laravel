<?php

use App\Http\Controllers\PortfolioController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PortfolioController@index')->name('home');
/*
Route::get('/stage', function () {
    return view('stage');
});
*/
Route::get('/stage1', 'PortfolioController@stage1')->name('stage1');




Route::resource('mesCompetences','CompetenceController');



