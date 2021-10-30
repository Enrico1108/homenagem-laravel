<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LugarController;

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
//GET Sem Login
Route::get('/', [LugarController::class, 'index']);
Route::get('/sobre', [LugarController::class, 'sobre']);
Route::get('/lugares', [LugarController::class, 'lugares']);
Route::get('/lugar/{id}', [LugarController::class, 'lugar']);

//ADMIN
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/lugar/create', [LugarController::class, 'createadm'])->name('admin.lugar.create');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/lugar', [LugarController::class, 'lugaradm'])->name('admin.lugar.lugar');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/profile', [LugarController::class, 'profileadm'])->name('admin.profile.profile');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/users', [LugarController::class, 'users'])->name('admin.users.users');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/turmas/create', [LugarController::class, 'turmaforms'])->name('admin.turma.create.createturma');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/users/view/{id}', [LugarController::class, 'usersview'])->name('admin.users.view');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/conteudo/create', [LugarController::class, 'createconteudo'])->name('admin.conteudo.create.createconteudo');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/conteudo', [LugarController::class, 'conteudo'])->name('admin.conteudo.conteudo');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/profile', [LugarController::class, 'profile'])->name('admin.profile');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/users/create', [LugarController::class, 'createuserview'])->name('admin.users.create.createuser');
//POST
Route::post('/admin/lugar', [LugarController::class, 'postlugar']);
Route::post('/admin/turma', [LugarController::class, 'postturma']);
Route::post('/admin/users', [LugarController::class, 'postuser']);
Route::post('/admin/conteudo', [LugarController::class, 'createconteudopost']);

//PROFESSORES
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/dashboard', function () {
    return view('professor.dashboard');
})->name('professor.dashboard');

//USUÁRIOS
Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');






