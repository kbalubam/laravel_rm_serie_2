@extends('back.template.main')
@section('backContent')

<div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$navbar->lien}}</h5>
        <form action="{{route('navbars.show', $navbar->id)}}" method="POST">
            @method('DELETE')
            @csrf
                <button type="button" class="btn btn-danger">DELETE</button>
          </form>
        <a href="{{route('navbars.index')}}">
                <button type="button" class="btn btn-warning">BACK</button>
          </a>

        </div>
      </div>
@endsection
