@extends('layouts.layouts')

@section('content')
    @component('components.navbar')
    @endcomponent

    <div id="home">
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection
