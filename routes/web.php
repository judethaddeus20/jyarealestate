<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Agent\AgentPropertyController;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Agent\AgentSalesController;
use App\Http\Controllers\Client\ClientController;
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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('index');


Route::group(['middleware' => 'web'], function(){
    Route::get('properties/{property}', [App\Http\Controllers\HomeController::class, 'property'])->name('show');
    Route::get('all-properties', [App\Http\Controllers\HomeController::class, 'showAllProperties'])->name('all');

    Route::group([
        'namespace' => 'Client',
        'prefix' => 'client',
        'as' => 'client.',
    ], function(){
        Route::get('loan', [App\Http\Controllers\Client\ClientController::class, 'showLoan'])->name('loan');
    });

    
});

Route::group(['middleware' => 'auth'], function(){
    
    Route::group([
        'namespace' => 'Admin',
        'prefix' => 'admin',
        'middleware' => 'admin',
        'as' => 'admin.',
    ], function(){
        Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
        Route::get('property/getCity/{id}', [App\Http\Controllers\Admin\PropertyController::class, 'getCity'])->name('getCity');
        Route::get('property/getMunicipality/{id}', [App\Http\Controllers\Admin\PropertyController::class, 'getMunicipality'])->name('getMunicipality');
        Route::resource('property','PropertyController');
        Route::resource('sales','SalesController');
        Route::resource('user','UserController');
        
    });

    Route::group([
        'namespace' => 'Agent',
        'prefix' => 'agent',
        'middleware' => 'agent',
        'as' => 'agent.',
    ], function(){
        Route::get('/home', [App\Http\Controllers\Agent\HomeController::class, 'index'])->name('home');
        Route::resource('property','AgentPropertyController');
        Route::resource('sales','AgentSalesController');
    });

    
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);

    Route::get('map', function () {return view('pages.maps');})->name('map');
    Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
    Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
}); 

