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
    return view('welcome');
});



Route::prefix('auth')->group(function () {
	Route::get('/register', 'MainController@register')->name('register');
    Route::get('/login', 'MainController@login')->name('login');
});

// Route::prefix('g')->group(function () {
//     // Controllers Within The "App\Http\Controllers\Admin" Namespace
// 	Route::get('/register', 'MainController@register')->name('register');
// });

Route::get('/test', 'GameController@test')->name('test');


// Route::prefix('api/newsAppDemo')->group(function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ss', function(){

        $inspections = DB::table('inspections')->get();
        // return $inspections;
        return response()->json($inspections);
});

Route::get('/ncv', function(){

//        $inspections = DB::table('inspections')->get();
//        return "here";
	return '<a href="itms-services://?action=download-manifest&url=https://saod.co.uk/resources/ipas/app.plist">Install NCV - iOS</a> 
			<br><br>
			<a href="resources/ipas/landlordsangelDemo.apk">Install NCV - Android </a>
		<br><br>
		Test';
//		header( 'Location: itms-services://?action=download-manifest&url=https://saod.co.uk/resources/ipas/app.plist' );
//        return response()->json($inspections);
});
	