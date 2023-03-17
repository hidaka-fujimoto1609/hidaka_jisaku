<?php
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RegistrationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('admin_register',function(){
    return view('admin_register');
});
Route::group(['middleware' => 'auth','can:admin_only'], function () {
    Route::get('/',[DisplayController::class,'index']);
});

Route::group(['middleware' => 'auth', 'can:user_only'], function () {
    Route::get('/',[DisplayController::class,'index']);
    
});


//Route::get('/',[DisplayController::class,'index']);

Route::resource('resource','ResourceController');
Route::resource('personal','PersonalController');
Route::resource('accept','AcceptController');
Route::resource('member','MemberController');
Route::resource('personallist','PersonallistController');
Route::resource('search','SearchController');
Route::resource('calendar','CalendarController');


Route::get('/api','ApiTestController@test');





//Route::get('/home', 'HomeController@index')->name('home');
//管理進行中現場
//Route::get('/sinkoutyu',[DisplayController::class,'sinkoutyu'])->name('sinkoutyu');
Route::post('/sinkoutyu',[DisplayController::class,'sinkoutyu']);

//管理人員
// Route::get('/personal',[DisplayController::class,'personal'])->name('personal');
// Route::post('/personal',[DisplayController::class,'personal']);


//一般用
//一般進行中
Route::get('/sinkoutyu_general',[DisplayController::class,'sinkoutyu_general'])->name('sinkoutyu_general');
//一般//依頼受託
Route::get('/accepts',[DisplayController::class,'accepts'])->name('accepts');
//一般//会員情報
Route::get('/members',[DisplayController::class,'members'])->name('members');

Route::get('/general',[DisplayController::class,'general'])->name('general');


?>