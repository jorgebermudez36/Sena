@extends('layouts.menu')

@if(Auth::check())

@section('content')
    <div id="app">
        <employe-component></employe-component>
    </div>
@endsection

@endif

