<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/link', function () {
//     echo "Link";
// })->name('page.link');


 
Route::controller(NavbarController::class)->group(function () {
    Route::get('/', 'index')->name('page.index');
    Route::get('/link/{id}/{name}', 'link')->name('page.link');
    Route::get('/bookingroom', 'room')->name('page.room');
});


//http://127.0.0.1:8000/
//http://127.0.0.1:8000/link