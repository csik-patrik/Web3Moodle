<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Teacher\CourseController;
use App\Http\Controllers\Student\CourseMemberController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'is_admin'],
], function () {
    // Admin main view.
    Route::view('/index', 'Admin.index')->name('index');

    // User maintenance route.
    Route::resource('users', UserController::class);

    Route::get('/activity', [LoggerController::class, 'index'])->name('activity.index');

});

Route::resource('course-members', CourseMemberController::class);

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'is_teacher_or_admin'],
], function () {

    // Courses
    Route::resource('courses', CourseController::class);
});
