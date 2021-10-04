@extends('back.template.main')
@section('backContent')
<form action="{{route('titres.update', $titre->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">titre</label>
         <input type="text" class="form-control" value="{{$team->nom}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre" value="{{$titre->titre}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">soustitre</label>
        <input type="text" class="form-control" value="{{$team->poste}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre" value="{{$titre->sousTitre}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
