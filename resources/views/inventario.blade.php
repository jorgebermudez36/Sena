@extends('layouts.menu')

@if(Auth::check())

@section('content')
    <div id="app">
        <inventario-component></inventario-component>
    </div>
@endsection

@endif