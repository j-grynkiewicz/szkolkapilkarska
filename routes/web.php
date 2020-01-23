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

Auth::routes(['verify' => true]);

Route::get('home', [ 'middleware' => 'auth', 'uses' => 'HomeController@index' ]);


Auth::routes();



// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


Route::get('/coachList','HomeController@coaches')->middleware('auth')->name('coachList');
Route::get('/coach','HomeController@coach')->middleware('auth')->name('coach');
Route::get('/fieldList','HomeController@fields')->middleware('auth')->name('fields');
Route::get('/field','HomeController@field')->middleware('auth')->name('field');
Route::get('/training','HomeController@training')->middleware('auth')->name('training');
Route::get('/trainingList','HomeController@trainings')->middleware('auth')->name('trainings');
Route::get('/payment','HomeController@payment')->middleware('auth')->name('payment');
Route::get('/cash','HomeController@cash')->middleware('auth')->name('cash');
Route::get('/card','HomeController@card')->middleware('auth')->name('card');
Route::get('/settings','HomeController@settings', 'DestroyController')->middleware('auth')->name('settings');
Route::get('/thanks','HomeController@thanks')->middleware('auth')->name('thanks');
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('admin', 'HomeController@admin')->middleware('admin');
Route::resource('users', 'UserController');
Route::resource('coaches', 'CoachController');
Route::resource('fields', 'FieldController');
Route::resource('trainings', 'TrainingController');
Route::delete('deleteAccount', 'DestroyController@destroy');


use App\Mail\QRCode;
use Illuminate\Support\Facades\Mail;
Route::get('/qrcash', function () {
    $user = Auth::user();
    Mail::to($user->email)->send(new QRCode());
    return view('thanksReservation');
});
Route::get('calendar', function () {
      return view('calendar');
});
//fullcalender
Route::get('fullcalendar','FullCalendarController@index');
Route::post('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');







