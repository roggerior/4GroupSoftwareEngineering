@extends('adminlte::page')

@section('title', 'SysModule')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h4>Bem vindo, {{ Auth::user()->name }}</h4> 
@stop

