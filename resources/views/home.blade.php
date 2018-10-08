@extends('layouts.primary')

<!--Home - Meta title-->
@section('title', 'Mis Puntos Colombia - By WeBussines')

<!--Home mockup styles-->
@section('styles')
<style>
    html, body {
        background-color: #386bad;
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        color: #fff;
        font-size: 84px;
        font-weight: bold;
    }

    .links > a {
        color: #fff;
        padding: 0 25px;
        font-size: 16px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@endsection

<!--Home - content-->
@section('content')

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Mis puntos Colombia
            </div>

            <div class="links">
                <a href="https://www.webussines.com" target="_blank">By WeBussines</a>
            </div>
        </div>
    </div>
@endsection