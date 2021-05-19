<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\teacher;
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

Route::get("form",[StudentController::class,("form")]);
Route::post("store_student",[StudentController::class,("store_student")]);
Route::get("selectdata",[StudentController::class,("selectdata")]);
Route::get("showstudent/{id}",[StudentController::class,("showstudent")]);
Route::get("deletestudent/{id}",[StudentController::class,("deletestudent")]);
Route::post("submitEditstudent",[StudentController::class,("submitEditstudent")]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route Model Binding in Laravel
// Route::get("/teacher/{teacher:roll_id}", function(teacher $teacher)
// {
//     echo $teacher;
// });
Route::get("/teacher/{teacher}",[TeacherController::class,("index")]); 

//URL Generation Helper Functions in Laravel
Route::get("/test", function()
{
    //echo "This is test route";
    //echo url ("sample");
    //echo url()->current();
    //echo url()->full();
    //echo route("sample.method");
    echo action([TeacherController::class,("sample")]);
});
Route::get("/call/{id}", function($id)
{
    echo "This is call route " .$id;
});
Route::get("sample",[TeacherController::class,("sample")])->name("sample.method");