@extends('adminlte::page')

@section('title', 'Balance')

@section('content_header')
    <h1>Fazer Recarga</h1>
@stop

@section('content')
    <div class="pull-left">
        <form method="POST" action="{{ route('deposit.store') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" placeholder="Valor" name="value" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Recarregar</button>
            </div>
        </form>
    </div>
@stop