@extends('back.template.main')
@section('backContent')
<form action="{{route('navbars.update',$navbar->id)}}" method="POST">
            @csrf
            @method('PUT')
            <h1 class="text-center">EDIT NAVBAR</h1>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$navbar->name}}">
            <label for="exampleInputEmail1" class="form-label">lien</label>
            <input type="text" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="lien" value="{{$navbar->lien}}">
            </div>
           <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

