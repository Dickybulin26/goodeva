<?php



use App\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;




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



// Route::get('/', 'FrontController@home');





// Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');




//WEBSITE GOODEVA

// Route::get('/', function () {

//     return view('frontend/home');
// });

Route::get('/home-dev', 'FrontGoodevaLpController@home');
Route::get('/', 'FrontHomeRevampController@home');
Route::get('goodeva-sales-trace', 'FrontGoodevaSalesTraceController@salesTrace');
Route::get('goodeva-smart-safety', 'FrontGoodevaSmartSafetyController@smartSafety');
Route::get('goodeva-enterprise', 'FrontGoodevaEnterpriseController@GoodevaEnterprise');

//? detail-product
// Route::get('detail-product/b20-product', 'FrontProductController@index');
Route::get('/detail-product/{product}', 'FrontProductController@index');

//? evamedia
Route::get('/evamedia','FrontEvamediaController@evaMedia')->name('evamedia.index');
// Route::get('/evamedia/read/{slug}', function ($slug, Post $post) {
//     return view('frontend/bs/evamedia/detail', compact('slug', 'post'));
// })->name('evamedia.detail');

Route::get('/evamedia/read/{slug}', 'FrontDetailEvamediaController@detail')->name('evamedia.detail');

// search post
Route::get('evamedia/search','evamediaPostController@searchPost')->name('evamedia.search');



//! old version
Route::get('/home-old', function () {

    return view('frontend/home-08-12-2022');
});



Route::get('/template', function () {

    return view('index');
});



// Route::get('/solutions', function () {

//     return view('frontend/solutions');
// });

Route::get('solutions', 'FrontGoodevaLpController@solution');

Route::get('/solutions-old', function () {

    return view('frontend/solutions-08-12-2022');
});



Route::get('/contoh', function () {

    return view('index');
});



// Route::get('/contact', function () {

//     return view('frontend/contact');
// });

Route::get('/contact-old', function () {

    return view('frontend/contact');
});
Route::get('contact', 'FrontGoodevaLpController@contact');



// Route::get('/about', function () {

//     return view('frontend/about');
// });

Route::get('about', 'FrontGoodevaLpController@about');

Route::get('/about-old', function () {

    return view('frontend/about');
});



Route::get('/about-new', function () {

    return view('frontend/about_backup');
});



Route::get('/about-adjustt', function () {

    return view('frontend/about_adjust');
});



// Route::get('/goodeva-smart-safety', function () {

//     return view('frontend/smart_safety');
// });

// Route::get('/goodeva-smart-safety-dev', function () {
    
//     return view('frontend/smart_safety_dev');
// });

Route::get('/goodeva-smart-safety-old', function () {

    return view('frontend/smart_safety_08_12_2022');
});

Route::get('goodeva-smart-safety-olds', 'FrontGoodevaLpController@smartSafety');


Route::get('goodeva-omsetku', 'FrontGoodevaLp2Controller@omsetku');



Route::get('/goodeva-smart-healthy', function () {

    return view('frontend/smart_healthy');
});



Route::get('/goodeva-smart-erp', function () {

    return view('frontend/smart_erp');
});



// Route::get('/careers', function () {

//     return view('frontend/careers');
// });

Route::get('careers', 'FrontGoodevaLpV2Controller@careerV2_2');
Route::get('careers-v1', 'FrontGoodevaLpController@career');
Route::get('careers-v2', 'FrontGoodevaLpV2Controller@career');
Route::get('careers-v2_2', 'FrontGoodevaLpV2Controller@careerV2_2');

Route::get('/careers-old', function () {

    return view('frontend/careers');
});


Route::get('/load-img-ninja', 'FrontController@LoadImg');

Route::post('/send-saran', 'FrontController@SendSaran');

// Route::get('/contact', 'FrontController@contact');

Route::get('/wa', 'FrontController@wa');

Route::get('/clear-cache', function () {

    $exitCode = Artisan::call('cache:clear');

    $exitCode = Artisan::call('config:cache');

    return 'DONE'; //Return anything

});
