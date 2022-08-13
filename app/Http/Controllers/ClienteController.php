<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::get();


        return view('clientes.index', compact('clientes'));
    }

    public function show($id)
    {
        //first retorna um unico cliente
        $user = Cliente::where('id', '=', $id)->first();

        dd($user);
        die();
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request) {
        

    }
}
