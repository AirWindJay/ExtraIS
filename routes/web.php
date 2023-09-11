<?php

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

Route::get('/', 'Auth\LoginCtr@index')->name('login');
Route::post('/login', 'Auth\LoginCtr@login');
Route::get('/logout', 'Auth\LoginCtr@logout')->name("Logout");
Route::post('/logout', 'Auth\LoginCtr@logout')->name("Logout");

Route::group(['middleware' => 'auth'], function(){
    

    Route::get('/home', 'HomeCtr@index');
    Route::post('/generate/patlist', 'ChecklistCtr@patlist');
    Route::post('/generate/checklist', 'ChecklistCtr@checklist');

        Route::get('/CCList/dashboard', 'ChecklistCtr@index');
        Route::post('/generate/checklisteditable', 'ChecklistCtr@checklisteditable');
        Route::post('/checklist/save', 'ChecklistCtr@savechanges');


    Route::group(['middleware' => 'WebMaster'], function(){
        Route::get('/webmaster/actlog', 'WebMasterCtr@actlog');
        Route::get('/webmaster/users', 'WebMasterCtr@users');
        Route::post('/webmaster/adduser', 'WebMasterCtr@adduser');
        Route::get('/webmaster/edit/{id}', 'WebMasterCtr@edituser');
        Route::post('/webmaster/save/edit', 'WebMasterCtr@saveuser');
        Route::get('/webmaster/delete/{id}', 'WebMasterCtr@deleteuser');
    });    


    Route::group(['middleware' => 'Billing'], function(){
        Route::post('/JS/genpatientlist', 'soaCTR@JS_SOA_GenPatientList');
        Route::post('/JS/genenclist', 'soaCTR@JS_SOA_GenEncounterList');

        Route::get('/UniChar', 'UniCharCTR@index');
        Route::post('/JS/submitenccode', 'UniCharCTR@submitenccode');
    });
});

