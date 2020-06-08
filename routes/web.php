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
Auth::routes();
// Route::get('/test', 'HomeController@testTemplate');
Route::get('/home', 'DashboardController@dashboard');
Route::get('/pasien', 'PasienController@semua');
Route::get('/pasienodp', 'PasienController@odp');
Route::get('/pasienpdp', 'PasienController@pdp');
Route::get('/pasienpositif', 'PasienController@positif');
Route::get('/pasiensembuh', 'PasienController@sembuh');
Route::get('/pasienmeninggal', 'PasienController@meninggal');


// Table Controller 
Route::get('/table/pasien', 'TableController@tablePassienSemua')->name('tablePasien');
Route::get('/table/odp', 'TableController@tablePassienOdp')->name('tableOdp');
Route::get('/table/pdp', 'TableController@tablePassienPdp')->name('tablePdp');
Route::get('/table/positif', 'TableController@tablePassienPositif')->name('tablePositif');
Route::get('/table/sembuh', 'TableController@tablePassienSembuh')->name('tableSembuh');
Route::get('/table/meninggal', 'TableController@tablePassienMeninggal')->name('tableMeninggal');
Route::get('/modal','ModalController@modal')->name('modal');

Route::match(['post','patch','delete'], '/pasien/crud','PasienController@PasienCrud')->name('pasien_crud');
Route::post('/pasien/status','PasienController@PasienStatus')->name('pasien_status');


//Route::get('/home', 'HomeController@index')->name('home');
