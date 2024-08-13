<?php

use App\Models\PostModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'title' => 'Goodeva Technology AI & iOt Enterprise'
    ]);
});


Route::get('/salestrace', function () {
    return view('pages.salestrace', [
        'title' => 'Goodeva Technology AI & iOt Enterprise'
    ]);
});

Route::get('/smartsafety', function () {
    return view('pages.smartsafety',[
        'title' => 'Goodeva Technology AI & iOt Enterprise'
    ]);
});

Route::get('/goodeva-enterprise', function () {
    return view('pages.goodevaEnterprise',[
        'title' => 'Goodeva Technology AI & iOt Enterprise',
        'data_post' => PostModel::getAllData(),
    ]);
});

Route::get('/detail-product', function () {
    return view('pages.detailProduct',[
        'title' => 'Goodeva Technology AI & iOt Enterprise'
    ]);
});
