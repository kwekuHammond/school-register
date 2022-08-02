<?php

use App\Http\Controllers\index_controller;
use App\Http\Controllers\student as StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('index');
})->name('login');

Route::post('/', [index_controller::class, 'login']);

Route::get('/create-account', function(){
    return view('create-account');
});
Route::post('/create-account', [index_controller::class, 'create_account']);

//Search
Route::POST('/student-list', [StudentController::class, 'search_student']);

//Route to main page (Students list view)
Route::get('/student-list', [StudentController::class, 'Student_list_View'])->middleware('auth');

//Delete Student Record
Route::delete('/student-list/{id}', [StudentController::class, 'DeleteStudent']);

//Update Button Route
Route::get('/update/{student}', [StudentController::class, 'AddNewStudentView'])->middleware('auth');

//Add New Student Page
Route::get('/add-new-student', function(){
    if(!auth()->check())
        return redirect('/');

    return view('add-new-student')->with('user_name', Auth::user()->fullname);
});

//Add New Student Post Method
Route::post('/add-new-student', [StudentController::class, 'AddNewStudent']);

//Update Student Data
Route::put('/add-new-student', [StudentController::class, 'UpdateStudentData']);



//Logout
Route::post('/logout', function(Request $request){
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});
