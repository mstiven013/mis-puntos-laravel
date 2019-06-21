@extends('layouts.primary')

<!--Home - Meta title-->
@section('title', 'Mis Puntos Colombia - By WeBussines')

<!--Home mockup styles-->
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

<!--Home - content-->
@section('content')

    <div class="home-banner">
        <div class="content">
            <h1 class="title">
                Mis puntos Colombia
            </h1>

            <div class="links">
                <a href="https://www.webussines.com" target="_blank">By WeBussines</a>
            </div>

            <div class="seo">
                <h1>Mis puntos Colombia</h1>
                <h1>Gestión de puntos Colombia</h1>
                <h1>Fidelización de clientes</h1>
                <h1>Puntos Colombia</h1>
                <h1>Gana Puntos</h1>
            </div>
        </div>
    </div>
@endsection
