<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('nom')}}">nom</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('prenom')}}">prénom</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('age')}}">age</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('caroussel')}}">caroussel</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('animals')}}">animals</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('color')}}">color</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('plat')}}">plat</a>
          </li> 
          
        </ul>
      </div>
    </div>
  </nav>