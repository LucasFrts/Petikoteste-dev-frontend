@extends('templates.layout')

@section('title')
Subscribe
@endsection

@section('content')
<div id="app">
    <Subscribe-Component active="{{ $active }}"/>
</div>

  
@endsection

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endsection

