@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Adicionar Serie</h1>
    </div>
    
    <form method="post">
        <div class="form-group">
            <label for="nome" class="">Nome: </label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
</div>
@stop


