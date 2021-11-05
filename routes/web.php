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
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/users/view/{id}', [LugarController::class, 'usersview'])->name('admin.users.view');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/conteudo/create', [LugarController::class, 'createconteudo'])->name('admin.conteudo.create.createconteudo');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/conteudo', [LugarController::class, 'conteudo'])->name('admin.conteudo.conteudo');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/profile', [LugarController::class, 'profile'])->name('admin.profile');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/users/create', [LugarController::class, 'createuserview'])->name('admin.users.create.createuser');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/lugar/view/{id}', [LugarController::class, 'viewlugardadm'])->name('admin.lugar.view.viewlugar');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/conteudo/view/{id}', [LugarController::class, 'viewconteudoadm'])->name('admin.conteudo.view.viewlugar');
//POST
Route::post('/admin/lugar', [LugarController::class, 'postlugar']);
Route::post('/admin/users', [LugarController::class, 'postuser']);
Route::post('/professor/users', [LugarController::class, 'postuserprof']);
Route::post('/admin/conteudo', [LugarController::class, 'createconteudopost']);
Route::post('/professor/conteudo', [LugarController::class, 'createconteudopostprof']);
Route::post('/professor/lugar', [LugarController::class, 'postlugarprof']);

//PROFESSORES
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/users', [LugarController::class, 'usersprof'])->name('professor.users.users');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/dashboard', function () {return view('professor.dashboard');})->name('professor.dashboard');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/users/view/{id}', [LugarController::class, 'usersviewprof'])->name('professor.users.view');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/users/create', [LugarController::class, 'createuserview'])->name('professor.users.create.createuser');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/conteudo', [LugarController::class, 'conteudoprof'])->name('professor.conteudo.conteudo');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/conteudo/view/{id}', [LugarController::class, 'viewconteudoprof'])->name('professor.conteudo.view.viewlugar');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/conteudo/create', [LugarController::class, 'createconteudoprof'])->name('professor.conteudo.create.createconteudo');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/lugar', [LugarController::class, 'lugarprof'])->name('professor.lugar.lugar');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/lugar/view/{id}', [LugarController::class, 'viewlugardprof'])->name('professor.lugar.view.viewlugar');
Route::middleware(['auth:sanctum', 'verified', 'authprof'])->get('/professor/lugar/create', [LugarController::class, 'createprof'])->name('professor.lugar.create');







//USUÁRIOS
Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', [LugarController::class, 'userdash'])->name('dashboard');






