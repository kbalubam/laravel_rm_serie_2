@extends('template.welcome')
@section('caroussel')
<div class="carousel-item active couleur1">
        <img src="{{asset('img/orange.jpeg')}}" class="d-block w-100" alt="...">

  </div>
  <div class="carousel-item couleur2">
        <img src="{{asset('img/rouge.jpeg')}}" class="d-block w-100" alt="...">

  </div>
 @endsection 