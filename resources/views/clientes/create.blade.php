@extends('layouts.template_body')

@section('title', 'Criar user')
@section('content')
    <h1> Novo user</h1>
    <form action={{ route('clientes.store') }} method="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="pass">
        <input type="email" name="email">
        <button type="submit">envia</button>
    </form>
@endsection
