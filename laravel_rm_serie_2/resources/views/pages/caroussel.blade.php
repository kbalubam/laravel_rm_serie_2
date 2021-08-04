@extends('template.welcome')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active couleur1">
                <img src="{{asset('img/orange.jpeg')}}" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item couleur2">
                <img src="{{asset('img/rouge.jpeg')}}" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item animal1">
          <img src="{{asset('img/loup.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item animal2">
          <img src="{{asset('img/chevre-1-074526-650-325.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item plat1">
          <img src="{{asset('img/lasagne.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item plat2">
          <img src="{{asset('img/ratatouille.png')}}" class="d-block w-100" alt="...">
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


@endsection