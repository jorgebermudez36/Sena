@extends('layouts.menu')

@if(Auth::check())

@section('content')
    <div id="app">
        <usuario-component><usuario-component>
    </div>
@endsection

@endif