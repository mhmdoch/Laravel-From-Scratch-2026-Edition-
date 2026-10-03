<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });





// Route::view('/', 'welcome', [
//     'greeting' => 'Hello',
//     'person' => request('person', 'Udo') // http://127.0.0.1:8000/?person=namePerson
// ]);

Route::get('/', function () {
    return view('welcome', [
    'greeting' => 'Hello',
    'person' => request('person', 'Udo')
    ]);
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');


