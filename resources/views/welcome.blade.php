@extends('constructors.app')
@section('title')
<title>Welcome</title>
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection
@section('popup_content')
<h4>privet</h4>
@endsection
@section("content")
<section style="height:100vh;" class="stap1">
    <div class="container">
        <div class="content_container">
        <h1>TASHKENT<br>FRUITS</h1>
        <p>Оптом и в розницу</p>
        <p>Доставка по всему РК</p>
        <p>Более 200 наименовании продукта</p>
        <button class="btn btn-danger showpopup">Купить продукт</button>
    </div>
    </div>
</section>
<script src="{{ asset('js/welcome.js') }}"></script>
@endsection
