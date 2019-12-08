@extends('layouts.layouts')

@section('content')
    <header class="header">
        <p class="sub">Web designer's portfolio</p>
        <h1>HI, MY NAME IS...</h1>
        <p class="description">Check out some of my works.</p>
        <div class="buttons">
            <a class="button" href="#about">LEARN MORE</a>
            <a class="button button-showy" href="#contact">SEND MESSAGE</a>
        </div>
    </header>
    <section class="about" id="about">
    </section>
    <section class="works">
    </section>
    <section class="skills">
    </section>
    <section class="contact" id="contact">
    </section>
    <footer class="footer">
    </footer>
    <!-- @component('components.navbar')
    @endcomponent

    <div id="home">
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> -->

@endsection
