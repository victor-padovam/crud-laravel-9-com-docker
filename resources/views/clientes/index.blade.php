@extends('layouts.template_body')

@section('title', 'Lista')
@section('content')
    <h1> lISTAGEM DOS CLIENTES
        (<a href="{{ route('clientes.create') }}">+</a>)
    </h1>

    <ul>
        @foreach ($clientes as $cliente)
            <li>
                {{ $cliente->cidade }}
            </li>
        @endforeach
    </ul>
@endsection
