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

Route::get('/', function () {
    $saluto = 'Ciao User1212';
    return view('home', compact('saluto'));
});

Route::get('/students', function () {
    $saluto = 'Benvenuto nella pagina studenti';
    $students = [
        [
            "name" => 'Mirko',
            "surname" => 'Farina',
            "mobile" => '33412342131'
        ],
        [
            "name" => 'Marco',
            "surname" => 'Lupos',
            "mobile" => '334342131'
        ],
        [
            "name" => 'Pino',
            "surname" => 'Lavatrice',
            "mobile" => '33412222342131'
        ],
        [
            "name" => 'Gatto',
            "surname" => 'Pardo',
            "mobile" => '33422212342131'
        ],
        [
            "name" => 'Ugo',
            "surname" => 'De ughi',
            "mobile" => '32322220'
        ],
        [
            "name" => 'Pinco',
            "surname" => 'Pallo',
            "mobile" => '9999999'
        ]
    ];

    return view('students', compact('saluto','students'));
});
