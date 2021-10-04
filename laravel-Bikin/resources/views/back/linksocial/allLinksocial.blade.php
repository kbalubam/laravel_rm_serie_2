@extends('back.template.main')






@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Icon</th>
      <th scope="col">Name</th>
      <th scope="col">Link</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      
      @foreach ($linksocials as $link )
          
      <tr>
        <th scope="row">{{$link->id}}</th>
        <td><i class="bx {{$link->icon->name}}"></i></td>
        <td>{{$link->name}}</td>
        <td>{{$link->link}}</td>

        <td>
            <form action="{{route('linksocials.destroy',$link->id)}}" method="post">
            <a href="{{route('linksocials.edit',$link->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
      </tr>
      @endforeach

  </tbody>
</table> 
@endsection
