@extends ('layouts.menu')

@if(Auth::check())

@section('content')
<div id="app">
    <mostrarcarg-component></mostrarcarg-component>
    @method('DELETE')
</div>

@endsection

@endif