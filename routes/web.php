<?php

use App\Http\Controllers\MechanicController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Models\Comment1;
use App\Models\Item;
use App\Models\Note;
use Illuminate\Support\Facades\Route;

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


Route::get("/user",[PostController::class,'index']);
Route::get("/get-owr-Of-car",[MechanicController::class,'getOwrOfCar']);

Route::get("/morph-one/{id}",[StudentController::class,"morphOne"]);
Route::get("/getStudentName",[StudentController::class,"getStudentName"]);



// morph one to many

Route::get("/comment", function(){
    // $item = Item::create([
    //     'title' => "item4"
    // ]);
    // $item->save();

    // $note = Note::create([
    //     'title' => "note1",
    //     "user_id" => 1
    // ]);
    // $note->save();
    // $comm=new Comment1();
    // $comm->body="This is item4  comments";
    // $nott=["body" => "note comment"];
    // $item->comments()->save($comm);
    // // $note->comments()->save($comm);

    $comm= Note::whereColumn("id", "title")->get();
    dd($comm->toArray());
});
