<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/movies',function(){
    //$movie = \App\Movie::where('rating','>','3')->get();
    //return $movie;


    //$movie = new \App\Movie();
    //$movie->title = 'The Fault in our Stars';
    //$movie->genre = 'Romantic Heartbreak';
    //$movie->rating = '9 on a scale of sobbing - bawling my eyes out';
    //$movie->save();
    //return \App\Movie::all();
    $movie = \App\Movie::find(8);

    return $movie;

});

Route::get('/students',function(){
    $students = \App\Student::all();
    return view('trial.students',['students'=> $students]);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
