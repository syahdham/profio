<style>

.container {
  padding: 50px 50px;
}

</style>

@extends('blog.layout')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h2>Laravel 5.5</h2>
        {{ Session::get('message')}}
      </div>
      <div class="pull-right">
        <a class="btn btn-success" href="blog/create">Input Data</a>
      </div>
    </div>
  </div>
</div>

<table class="tg" style="width:70%;">
  <tr>
    <th class="tg-rv4w">Nama</th>
    <th class="tg-rv4w">Edit</th>
    <th class="tg-rv4w">Delete</th>
  </tr>
  @foreach ($profio as $profio)
  <tr>
    <td>{{ $profio -> nama }}</td>
    <td><a href="blog/{{$profio->id}}/edit" class="btn btn-success">Edit</a></td>
    <td>
      <form class="" action="{{url('blog/'. $profio->id )}}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
        <input class="btn btn-warning" type="submit" name="name" value="Delete">
      </form>
    </td>
    <!-- <td> <a href="delete">Delete</a></td> -->
  </tr>
  @endforeach
</table>


@endsection
