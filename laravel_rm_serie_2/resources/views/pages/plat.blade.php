@extends('template.welcome')
@section('caroussel')
<div class="carousel-item plat1">
<img src="{{asset('img/lasagne.jpeg')}}" class="d-block w-100" alt="...">
</div>
<div class="carousel-item plat2">
<img src="{{asset('img/ratatouille.png')}}" class="d-block w-100" alt="...">
</div>
@endsection