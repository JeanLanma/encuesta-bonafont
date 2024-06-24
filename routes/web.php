<?php

use App\User;
use App\Survey;

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

Auth::routes();

Route::get('/home', function() {
    return redirect()->route('dashboard');
})->name('home');
Route::resource('surveys', 'SurveyController');


// Rutas administrativas
Route::get('admin', function() {
    return view('dashboard.index');
})->middleware(['web', 'auth'])->name('dashboard');

Route::prefix('admin')->middleware(['web', 'auth'])->group(function() {

    Route::resource('users', 'UserController')->names('admin.users');

    Route::get('/surveys/download/{survey}', 'SurveyController@download')->name('surveys.download');

    Route::get('/surveys', 'SurveyController@index')->name('dashboard.surveys');

    Route::get('/surveys/list/C-FO-SE-076', 'SurveyController@list');

    Route::get('/surveys/C-FO-SE-076', 'SurveyController@encuesta1')->name('encuesta1');

    Route::get('/stats/C-FO-SE-076/04', 'SurveyStatController@encuesta1');

    Route::get('reset', function(){
        $users = User::all();

        foreach($users as $user)
        {
            $user->password = bcrypt($user->employee_code);
            $user->update();
        }

        return 'Se realizaron las actualizaciones';
    });
});

Route::get('/', function() {
    return redirect()->route('dashboard');
})->name('employee_auth');
