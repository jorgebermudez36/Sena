@extends('layouts.app')

@if(Auth::check())

@section('content')

    <div id="app">
    <dashboard-component></dashboard-component>
   
    </div>
    
@endsection

@endif
