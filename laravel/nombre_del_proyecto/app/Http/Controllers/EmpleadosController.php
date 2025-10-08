<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Empleados;
use App\Models\Clientes;
use App\Models\Empresas;

class EmpleadosController extends Controller
{
    // Mostrar formulario login empleados
    public function showEmpleadoLogin()
    {
        return view('admin.login');
    }

    // Procesar login empleados
    public function empleadoLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $empleado = Empleados::where('email', $request->email)->first();

        if (!$empleado) {
            // Email no encontrado
            
            return back()->with('error', 'El correo no está registrado.');
        }

        if (!Hash::check($request->password, $empleado->contrasenya)) {
            // Contraseña incorrecta
            
            return back()->with('error', 'La contraseña es incorrecta.');
        }

        // Login exitoso
        Session::put('empleado_id', $empleado->id);
        Session::put('empleado_nombre', $empleado->nombre);

        

        return redirect()->route('clientes.lista');
    }

    // Mostrar formulario login clientes
    public function showClienteLogin()
    {
        return view('usuario.loginCliente');
    }

    // Procesar login clientes
    public function clienteLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $cliente = Clientes::where('email', $request->email)->first();

        if ($cliente && Hash::check($request->password, $cliente->contrasenya)) {
            Session::put('cliente_id', $cliente->id);
            Session::put('cliente_nombre', $cliente->nombre);

            return redirect()->route('empresas.lista');
        }

        return back()->with('error', 'Email o contraseña incorrectos');
    }

    // Listado de clientes
    public function listaClientes()
    {
        $clientes = Clientes::with('empresa')->get();
        return view('admin.listaClientes', compact('clientes'));
    }

    public function listaEmpresas()
    {
        $empresas = Empresas::with('empleados')->get();
        return view('usuario.listaEmpresas', compact('empresas'));
    }

    // Logout (empleado o cliente)
    public function logout()
    {
        Session::flush();
        return redirect()->route('empleado.login');
    }
}
