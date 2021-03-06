<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bo/admin-002-5/dashboard',[App\Http\Controllers\BackOfficeController::class, 'dashboard'])->name('admin.dashboard');
//Gestion LOT Tombola
Route::get('/bo/admin-002-5/tombola/index',[App\Http\Controllers\TombolaController::class, 'index'])->name('admin.tombola.index');
Route::post('/bo/admin-002-5/tombola/store',[App\Http\Controllers\TombolaController::class, 'store'])->name('admin.tombola.store');
Route::get('/bo/admin-002-5/tombola/{id}/lot/index',[App\Http\Controllers\LotController::class, 'index'])->name('admin.lot.index');
Route::post('/bo/admin-002-5/lot/store',[App\Http\Controllers\LotController::class, 'store'])->name('admin.lot.store');

//Gestion Entreprise
Route::get('/bo/admin-002-5/company/index',[App\Http\Controllers\CompanyController::class, 'index'])->name('admin.company.index');
Route::post('/bo/admin-002-5/company/store',[App\Http\Controllers\CompanyController::class, 'store'])->name('admin.company.store');


//FRONT OFFICE
Route::get('/', [App\Http\Controllers\FrontController::class, 'welcome'])->name('welcome');
Route::get('/tombola', [App\Http\Controllers\FrontController::class, 'tombola'])->name('tombola.index');

//USER FRONT OFFICE
Route::post('/register/user',[App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/profil',[App\Http\Controllers\UserController::class, 'profil'])->name('user.profil');
Route::get('/user/ticket',[App\Http\Controllers\UserController::class, 'ticket'])->name('user.ticket');
//Ticket
Route::get('/ticket/{tombola_id}',[App\Http\Controllers\TicketController::class, 'index'])->name('ticket.index');
Route::get('/ticket/repayTicket/{ticket_number}',[App\Http\Controllers\TicketController::class, 'repayTicket'])->name('ticket.repay');
//PAYEMENT
Route::post('/paiement/{id}/checkout',[App\Http\Controllers\TicketController::class, 'checkout'])->name('paiement.checkout');
//Ouverture Fichier
Route::get('/{directory}/{filename}', function ($directory,$filename)
{
    $path = public_path('storage/' .$directory.'/'. $filename);
    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response->download;
})->name('file.open');
