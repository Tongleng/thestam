@extends('layouts.web')
@section('content')
    <header class="container">
        <div class="logo-side">
            <img id="logo" src="/images/thestam.png" alt="logo" />
        </div>
        <nav class="navbar">
            <li><a class="navbar-items" href="/">Home</a></li>
            <li><a class="navbar-items" href="/service">Service</a></li>
            <li><a class="navbar-items" href="/contact">Contact</a></li>
            <li  class="about"><a class="navbar-items" href="/about">About</a></li>
        </nav>
    </header>
    <main>
        <h1 style="color: black">This is About Page</h1>
    </main>
@endsection