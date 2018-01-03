@extends('adminlte::page')

@section('title', 'Balance')

@section('content_header')
    <h1>Balance</h1>
@stop

@section('content')
    <div class="small-box bg-green">
        <div class="inner">
            <h3>{{number_format($amount, 2, '.', '')}}<sup style="font-size: 20px">R$</sup></h3>
            <br>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    <div class="clearfix"></div>
    <a class="btn btn-app" href="{{route('balance.deposit')}}">
        <i class="fa fa-plus"></i> Recarregar
    </a>

    <a class="btn btn-app btn-success">
        <i class="fa fa-usd"></i> Retirar
    </a>

@stop