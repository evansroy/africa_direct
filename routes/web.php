<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuoteController;



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


Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/service', [HomeController::class, 'services']);
Route::get('/contacts', [HomeController::class, 'contact']);

Route::post('send_contact',[HomeController::class,'sendContact']);

Route::get('recievedContact',[AdminController::class,'contactRecieved']);
Route::get('add_team',[AdminController::class,'addTeamMember']);

Route::post('team',[AdminController::class,'createStaff']);
Route::get('staff',[HomeController::class,'viewStaff']);

Route::post('send_Quote',[QuoteController::class,'sendQuote'])->name('send_Quote');

Route::get('cargoservice',[HomeController::class,'cargoService']);

Route::delete('delete_contact{id}',[AdminController::class,'delete']);

Route::get('recievedQuote',[QuoteController::class,'viewQuote'])->name('recievedQuote');

Route::get('partner',[AdminController::class,'partner'])->name('viewPartners');
Route::post('post',[AdminController::class,'addPartner'])->name('addPartner');

Route::get('/viewPartner',[HomeController::class,'viewpartner']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
