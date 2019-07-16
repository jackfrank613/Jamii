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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');
Route::get('/production', function () {
    return view('production');
})->name('production');
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::get('/research', function () {
    return view('navbar.researchpage');
})->name('research');

Route::get('/post','DataController@getDatapage')->name('post');


Route::get('/map', 'ExampleController@getInit')->name('homepage');

Route::get('/favorite', function () {
    return view('navbar.favoritepage');
})->name('favorite');

 Route::prefix('ath')->group(function () {

    Route::get('/creation', function () {
        return view('ath.creationpage');
    })->name('creation');
    Route::get('/professional', function () {
        return view('ath.professionalpage');
    })->name('professional');

    Route::get('/particular', function () {
        return view('ath.particularpage');
    })->name('particular');
    Route::post('/signup','Auth\RegisterController@createUser')->name('signup');
    Route::post('/login1','Auth\LoginController@userLogin')->name('homelogin');
    Route::post('/signup1','Auth\RegisterController@createUserprofessional')->name('signup1');

   
});
Route:: prefix('profile')->group(function(){
    Route::get('/myadmob', function () {
        return view('profiles.myadmobpage');
    })->name('myadmob');
   Route::post('/myadmob_create', function () {
    return view('profiles.myadmobpage');
    })->name('myadmob_create');

    // Route::get('/advertise','CategoryController@initCategory')->name('advertise');

    Route::get('/mytransaction', function () {
        return view('profiles.mytransactionpage');
    })->name('mytransaction');
    Route::get('/mypurchase', function () {
        return view('profiles.mypurchasepage');
    })->name('mypurchase');
    Route::get('/myaccount', function () {
        return view('profiles.myaccountpage');
    })->name('myaccount');
    Route::get('/mycv', function () {
        return view('profiles.mycvpage');
    })->name('mycv');
    Route::get('/mybooking', function () {
        return view('profiles.mybookingpage');
    })->name('mybooking');

});
Route::get('/advertise', function () {
    return view('advertisepage');
});

 Route::post('/addmarker','AddController@addMarker')->name('addmarker');
 Route::get('/research','AddController@getResearch')->name('research');




 Route::group([
   'prefix'=>'frontoffice',
   'namespace'=>'FrontOffice',
 ],function(){

     //homepage and post admob route
     Route::get('/','HomeController@getHomepage')->name('home');
     Route::get('/advertise','PostAdmobController@initCategory')->name('advertise');
     Route::post('/advertise/postcategory','PostAdmobController@addSelectCategory')->name('postcategory');
     Route::post('/advertise/postdescription','PostAdmobController@addDescriptionCategory')->name('postdescription');
     Route::post('/advertise/postprice','PostAdmobController@addPriceCategory')->name('postprice');
     Route::post('/advertise/uploadpicture','PostAdmobController@loadPictureCategory')->name('uploadpicture');
     Route::post('/advertise/postimage','PostAdmobController@addPictureCategory')->name('postimage');
     Route::post('/advertise/postinformation','PostAdmobController@addInformation')->name('information');


     
     
     //navigation route of header bar
     Route::get('research','NavigationsController@getResearch')->name('research');
     Route::get('favorite','NavigationsController@getFavorite')->name('favorite');
     Route::get('message','NavigationsController@getMessage')->name('message');

     //profile route of user
     Route::get('admob','ProfileController@getAdmob')->name('admob');
     Route::get('transaction','ProfileController@getTransaction')->name('transaction');
     Route::get('purchase','ProfileController@getPurchase')->name('purchase');
     Route::get('account','ProfileController@getAccount')->name('account');
     Route::get('mycv','ProfileController@getMycv')->name('mycv');
     Route::get('booking','ProfileController@getBooking')->name('booking');

     //post my advertise route
     Route::get('postadmob','PostAdmobController@getPostadmob')->name('postadmob');

 });