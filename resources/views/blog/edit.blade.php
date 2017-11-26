<style>

.container {
  padding: 50px 50px;
}

</style>

@extends ('blog.layout')
@section ('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h2>Input Data</h2>
        <form class="" action="{{url('blog/'. $profio->id )}}" method="post">
          <input type="text" name="nama" value="{{$profio->nama}}" placeholder="Nama">
          <input type="hidden" name="_method" value="put">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input class="btn btn-success" type="submit" name="name" value="Edit">
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
