@extends('templates.layout')

@section('title')
About
@endsection

@section('content')
<div id="app">
    <About-Component active="{{ $active }}"/>
</div>

  
@endsection

@section('scripts')
<script src="{{ asset('js/app.js') }}" type="module"></script>
@endsection
