@extends('layouts.menu')

@if(Auth::check())

@section('content')
    <div id="app">
        <editcarg-component></editcarg-component>
    </div>
@endsection

@endif