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
    return view('home');
}) -> name('home');

Route::get('/contatti', function () {
    // $data = [
    //     'phone' => '333433534343',
    //     'address' => 'Via A.pep 14',
    //     'city' => 'Teramo'
    // ];
    $data = [
        'contatti' => [
            '333433534343',
            'Via A.pep 14',
            'Teramo'
        ]
    ];

    return view('contatti', $data);
})-> name('contatti');

Route::get('/info', function () {
    return view('info');
})-> name('info');
// Route::get('/', function () {
//     return view('info');
// });
