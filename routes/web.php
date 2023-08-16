<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customAuth;
use App\Http\Controllers\AdminController;
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



Route::get('/', [customAuth::class, 'home']);
Route::get('/login', [customAuth::class, 'login']);
Route::get('/signup', [customAuth::class, 'signup']);
Route::post('/signup-user', [customAuth::class, 'signupUser'])->name('signupUser');
Route::post('/login-user', [customAuth::class, 'loginUser'])->name('loginUser');
Route::get('/request/{id}', [customAuth::class, 'request']);
Route::get('/services', [customAuth::class, 'services']);
Route::get('/dashboard', [customAuth::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/user/homepage', [customAuth::class, 'userHomepage'])->name('user.homepage');
Route::get('/logout', [customAuth::class, 'logout']);
Route::post('/book_service', [customAuth::class, 'book_service']);
Route::get('/confirmation/{id}', [customAuth::class, 'confirmation'])->name('confirmation');
Route::get('/cancel_order/{id}', [customAuth::class, 'cancel_order']);
Route::get('/requested', [customAuth::class, 'requested']);
Route::get('/history', [customAuth::class, 'history']);
Route::get('/contact', [customAuth::class, 'contact']);
Route::post('/feedback', [customAuth::class, 'feedback']);
Route::get('/see-worker/{id}', [customAuth::class, 'see_worker']);



//admin

Route::get('/add_service', [AdminController::class, 'add_service']);
Route::get('/view_service', [AdminController::class, 'view_service']);
Route::post('/add_here', [AdminController::class, 'add_here']);
Route::get('/delete_service/{id}', [AdminController::class, 'delete_service']);
Route::get('/edit_service/{id}', [AdminController::class, 'edit_service']);
Route::post('/update_here/{id}', [AdminController::class, 'update_here']);

Route::get('/Requested_service', [AdminController::class, 'Requested_service']);
Route::get('/assign/{id}', [AdminController::class, 'assign']);
Route::get('/assigned', [AdminController::class, 'assigned'])->name('assigned');
Route::get('/completed/{id}', [AdminController::class, 'completed']);
Route::get('/complete', [AdminController::class, 'complete']);
Route::get('/customer_feedback', [AdminController::class, 'customer_feedback']);
Route::get('/search', [AdminController::class, 'search']);
Route::get('/sort', [AdminController::class, 'sort']);

Route::get('/add_worker', [AdminController::class, 'add_worker']);
Route::get('/view_worker', [AdminController::class, 'view_worker']);
Route::post('/Add_Worker_Here', [AdminController::class, 'addworker_here']);
Route::get('/delete_worker/{id}', [AdminController::class, 'delete_worker']);
Route::get('/assign-worker/{orderId}/{workerId}', [AdminController::class, 'assignWorker'])->name('assign-worker');
Route::get('/search-worker', [AdminController::class, 'search_worker']);



