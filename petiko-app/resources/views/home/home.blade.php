@extends('templates.layout')

@section('title')
Home
@endsection

@section('content')
<div id="app">
    <Home-Component/>
</div>

  
@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
