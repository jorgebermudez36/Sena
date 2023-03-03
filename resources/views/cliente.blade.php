@extends('layouts.menu')

@if(Auth::check())



@section('content')

    <div id="app">
        <cliente-component></cliente-component>
    </div>
    
@endsection

@endif