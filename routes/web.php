<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LoggerController;

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
})->name('/');

require __DIR__.'/auth.php';

// Admin group
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'is_admin'],
], function () {
    // Admin main view.
    Route::view('/index', 'Admin.index')->name('index');

    // Users resource route.
    Route::resource('users', UserController::class);

    // Courses resource route.
    Route::resource('courses', CourseController::class);

    // Course members resource route.
    Route::resource('course-members', App\Http\Controllers\Admin\CourseMemberController::class);

    // Logs
    Route::get('/activity', [LoggerController::class, 'index'])->name('activity.index');
});

// Student group
Route::group([
    'prefix' => 'student',
    'as' => 'student.',
    'middleware' => ['auth', 'is_student'],
], function () {
    // Course members resource route.
    Route::resource('course-members', App\Http\Controllers\Student\CourseMemberController::class);
});

// User profile group
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'middleware' => 'auth'
], function () {
    // User profile route
    Route::view('/index', 'auth.user-profile')->name('index');
});