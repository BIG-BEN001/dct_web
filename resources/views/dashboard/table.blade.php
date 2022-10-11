@extends('dashboard.master')

@section('content')
<br><br>

    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

<table id="table" class="table table-striped table-hover table-sm table-bordered" >

    <thead class="table-active bg-primary" id="th">
      <tr>
        <th class="th-sm">ID</th>
        <th class="th-sm">Title</th>
        <th class="th-sm">Description</th>
        <th class="th-sm">Description II</th>
        <th class="th-sm">Description III</th>
        <th class="th-sm" colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{!!$post['title']!!}</td>
        <td>{!!$post['description']!!}</td>
        <td>{!!$post['description2']!!}</td>
        <td>{!!$post['description3']!!}</td>


        <td><a href="{{ action('WebsiteController@edit',$post['id']) }}" class="btn btn-warning btn-font"><b>Edit</b></a></td>
        <td>
          <form action="" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger btn-font" onclick="return myFunction();" type="submit"><b>Delete</b></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

</table>

  <script>
  function myFunction() {
      if(!confirm("This record will be deleted!"))
      event.preventDefault();
  }
 </script>

@endsection()
