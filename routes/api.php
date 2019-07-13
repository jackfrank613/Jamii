<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/** this is api for admob detail. */
Route::prefix('admobdetail')->group(function(){
 
    Route::post('/detail_category','DetailedCategoryController@addSelectCategory')->name('detail_category');
    Route::post('/detail_description','DetailedCategoryController@addDescriptionCategory')->name('detail_description');
    Route::post('/detail_price','DetailedCategoryController@addPriceCategory')->name('detail_price');
    Route::post('/detail_picture','DetailedCategoryController@addPictureCategory')->name('imageupload');

});

