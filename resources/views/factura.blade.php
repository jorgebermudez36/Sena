@extends('layouts.menu')

@if(Auth::check())

@section('content')
    <div id="app">
        <factura-component>
        </factura-component>
    </div>
@endsection

@endif
