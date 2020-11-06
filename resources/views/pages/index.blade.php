@extends('layouts.web')
@section('content')
    <header class="container">
        <div class="logo-side">
            <img id="logo" src="/images/theStamlogo.png" alt="logo" />
        </div>
        <nav class="navbar">
            <li><a class="navbar-items" href="/">Home</a></li>
            <li><a class="navbar-items" href="/contact">Contact</a></li>
            <li  class="about"><a class="navbar-items" href="/about">About</a></li>
        </nav>
    </header>
    <main>
        <div class="wraper">
            <div class="card" >
                <div class="top-side">
                    <h1>Title</h1>
                    <p>Desciption</p>
                </div>
                <img src="" />
            </div>
            <div class="card" >
                <div class="top-side">
                    <h1>Title</h1>
                    <p>Desciption</p>
                </div>
            </div>
            <div class="card" >
                <div class="top-side">
                    <h1>Title</h1>
                    <p>Desciption</p>
                </div>
            </div>
            <div class="card" >
                <div class="top-side">
                    <h1>Title</h1>
                    <p>Desciption</p>
                </div>
            </div>
        </div> 
    </main>
@endsection