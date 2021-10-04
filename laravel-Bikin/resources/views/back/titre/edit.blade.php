@extends('back.template.main')
@section('backContent')
<form action="{{route('titres.update', $titre->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">titre</label>
         <input type="text" class="form-control" value="{{$titre->nom}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre" value="{{$titre->titre}}">
        </div>
        @if ($titre->sousTitre!=null)
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sous titre</label>
                <input type="text" class="form-control w-25" value="{{$titre->sousTitre}}"id="exampleInputEmail1" aria-describedby="emailHelp" name="sousTitre">
            </div>
            @endif
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
