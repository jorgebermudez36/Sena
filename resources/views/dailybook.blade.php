@extends('layouts.menu')

@if(Auth::check())

@section('content')

    <div id="app">
    
    <dailybook-component></dailybook-component>
    
    </div>

@endsection

@endif