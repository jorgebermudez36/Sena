@extends('layouts.menu')
 

@if(Auth::check())

@section('content')
   
    <div id="app">
        <cargo-component></cargo-component>
    </div>

@endsection

@endif
