<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Page1', function () {
    echo "<h1>my first page</h1>";
});
Route::get('/Page2/{name}', function ($name) {
    echo "<h1>Welcome ".$name."</h1>";
});
Route::get('/Page2/{name}/{prenom}', function ($name,$prenom) {
    echo "<h1>Welcome ".$name." ".$prenom."</h1>";
});
Route::get('/Page3/{name?}', function ($name="foulen") {
    echo "<h1>Welcome ".$name."</h1>";
});

//Contraintes sur les lettres
Route::get('/Page4/{name}', function ($name) {
    if (preg_match('/^[a-zA-Z]+$/', $name)) {
        echo"Le paramètre contient uniquement des lettres";
    } else {
        echo"Le paramètre ne contient pas que des lettres.";
    }
});

//Contrainte sur les chiffres 
Route::get('/Page5/{param}', function ($param) {
    if (preg_match('/^[0-9]+$/', $param)) {
        echo"Le paramètre contient uniquement des chiffres";
    } else {
        echo"Le paramètre ne contient pas que des chiffres";
    }
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/show', [HomeController::class, 'show']);
Route::get('/article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');
Route::get('/result', [FormController::class, 'getResult'])->name('form-result');

Route::get('/test-middleware', function () {
    return "Vous avez accès à cette page car vous avez 18 ans ou plus.";
})->middleware('verifAge');