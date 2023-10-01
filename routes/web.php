<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;


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

Route::get('/',[ContactsController::class,"index"]);
Route::post('/add_contacts',[ContactsController::class,"addContacts"]);
Route::get('/addContactsForm',[ContactsController::class,"addContactsForm"]);
