@extends('template.welcome')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($garniture as $item )
        <tr>
        <td>{{$item}}</td>
        </tr>
      @endforeach
    
    </tbody>
  </table>

@endsection