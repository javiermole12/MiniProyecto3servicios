<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login', [EmpleadosController::class, 'showEmpleadoLogin'])->name('empleado.login');
Route::post('/login', [EmpleadosController::class, 'empleadoLogin']);

// Login clientes
Route::get('/login-cliente', [EmpleadosController::class, 'showClienteLogin'])->name('cliente.login');
Route::post('/login-cliente', [EmpleadosController::class, 'clienteLogin']);

// Lista de clientes (solo después de login)
Route::get('/clientes', [EmpleadosController::class, 'listaClientes'])->name('clientes.lista');
Route::get('/empresas', [EmpleadosController::class, 'listaEmpresas'])->name('empresas.lista');

// Logout
Route::get('/logoutEmpleado', [EmpleadosController::class, 'logoutEmpleado'])->name('logout_empleado');
Route::get('/logoutCliente', [EmpleadosController::class, 'logoutCliente'])->name('logout_cliente');
