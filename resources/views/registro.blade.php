@extends('layouts.primary')

<!--Home - Meta title-->
@section('title', 'Completar mi registro | Mis Puntos Colombia - By WeBussines')

<!--Home mockup styles-->
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

<!--Home - content-->
@section('content')
<div class="register-page">
    <h2 class="title">Crear cuenta de Mis Puntos</h2>
    @include('layouts.partials.forms.home.register')
</div>
@endsection
