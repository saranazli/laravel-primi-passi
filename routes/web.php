<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = [
       
        'name' => 'sara',
        'lastname' => 'saro',
        'age' => '1000'

    ];

    return view('home', $data);

}) ->name('home');

Route::get('/new', function () {

    $località = 'bologna';
    $dove = 'italia';

    return view('new-home', compact('località', 'dove'));

}) ->name('nuovo');

Route::get('/last', function () {

    return view('last-home', ['data' => 'oggi', 'mese' => 'maggio']);

}) ->name('nuovo');
