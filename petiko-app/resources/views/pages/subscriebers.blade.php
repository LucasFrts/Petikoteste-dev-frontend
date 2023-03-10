@extends('templates.layout')

@section('title')
Subscribers
@endsection

@section('content')
<div id="app">
    <Subscribers-Component active="{{ $active }}"/>
</div>
  
@endsection

@section('scripts')
<script src="{{ asset('js/app.js') }}" type="module"></script>
@endsection
