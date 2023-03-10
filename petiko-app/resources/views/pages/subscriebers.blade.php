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
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
