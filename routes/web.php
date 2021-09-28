<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});
Route::get('/view1/{ten}', function ($ten) {
    //Tham số cần truyền, là 1 mảng.
    $tuoi = 15;
    return view('view1', ['ten'=>$ten, 'tuoi'=>$tuoi]);

});
Route::get('/chi-tiet-bai-viet/{id}', [\App\Http\Controllers\PostController::class,'detail']);

Route::get('/product', function () {
    return view('product/index');
});
//GET/POST/PUT/DELETE/PATCH..

Route::get('/docs/8.x/routing', function () {
    echo 'Xin chào các bạn';
});
Route::get('/HelloWorld', function () {
    return redirect()->route('document');
});
//Route::get('/Hello/Ten', function (){
//    echo  'Hello Long';
//});

Route::get('/Hello/{ten?}', function ($ten = 'IT18A1.11') {
    echo 'Hello ' . $ten;
});
Route::get('myroute/{ten}', function ($ten) {
    return "Chào bạn" . $ten;
}
)->where(['ten' => '^[a-zA-Z ]*$']);

Route::get('tui-la-document-1', function () {
    echo 'Hello các bạn tui là 1 route';
})->name('document');

//Quản lý bài viết
//Danh sách bài viết
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'bai-viet'], function () {
        Route::get('/', function () {
            echo 'Danh sách bài viết';
        });
        Route::get('/them', function () {
            echo 'thêm bài viết';
        });
        Route::get('/cap-nhat', function () {
            echo 'cap nhat bài viết';
        });
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/them', function () {
            echo 'thêm bài viết';
        });
        Route::get('/cap-nhat', function () {
            echo 'cap nhat bài viết';
        });
    });
});



Route::get('category', [CategoryController::class, 'index']);
Route::get('category/them', [CategoryController::class, 'add']);
Route::get('category/update/{id}/{parent?}', [CategoryController::class, 'update']);
Route::get('get-data', [CategoryController::class, 'GetData']);
Route::get('lay-thong-tin', [CategoryController::class, 'GetData']);
Route::get('set-cookie', [CategoryController::class, 'SetCookie']);
Route::get('get-cookie', [CategoryController::class, 'GetCookie']);
Route::post('upload', [CategoryController::class, 'Upload']);


