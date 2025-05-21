@extends('layouts.app')

@section('styles')
@endsection

@section('scripts')

@endsection

@section('content')
    <h1> Formulário de Cadastro de Colaboradores</h1>
    <form action="" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <br>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="estado">Cargo:</label>
        <br>
        <input type="text" name="cargo" id="cargo">
        <br>
        <label for="telefone">Telefone:</label>
        <br>
        <input type="text" name="telefone" id="telefone">
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <label for="logadouro">Logradouro:</label>
        <br>
        <input type="text" name="logradouro" id="logradouro">
        <br>
        <label for="numero">Número:</label>
        <br>
        <input type="text" name="numero" id="numero">
        <br>
        <label for="municipio">Município:</label>
        <br>
        <input type="text" name="municipio" id="municipio">
        <br>
        <label for="estado">Estado:</label>
        <br>
        <input type="text" name="estado" id="estado">
    </form>
@endsection