@extends('dashboard.master')

@section('content')
<br><br>

    <script>
      $(document).ready(function(){
    $('.alert-success').fadeIn().delay(1000).fadeOut();
      });
  </script>

    <br>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br>
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <!-- <th>ID</th> -->
        <th>Name</th>
        <th>Email</th>

        <!-- <th colspan="2">Action</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <!-- <td>{{$post['id']}}</td> -->
        <td>{!!$post['name']!!}</td>
        <td>{!!$post['email']!!}</td>

      </tr>
      @endforeach
    </tbody>
  </table>


@endsection()
