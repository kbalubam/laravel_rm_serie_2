@extends('back.template.main')
@section('backContent')
<form action="{{route('portfolios.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="img" value="{{$portfolio->img}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Soustitre</label>
            <input type="text" value="{{$portfolio->soustitre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">soustitre2</label>
            <input type="text"  value="{{$portfolio->soustitre2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre2">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">lien</label>
            <input type="text"  value="{{$portfolio->lien}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lien">
        </div>
      <div class="d-flex justify-content-center">

          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
@endsection
