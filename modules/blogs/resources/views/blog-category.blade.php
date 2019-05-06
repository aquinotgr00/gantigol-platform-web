@extends('blogs::blog-index')

@section('content')
  <div class="row" style="padding:10px">
      <h3 >Blog Categories </h3> <a href="/blog/category/new"><button type="button" class="btn btn-light">Add New</button></a>
  </div>
  <div class="row">
     <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($list as $i=>$row)
        <tr>
          <th scope="row">{{$i+1}}</th>
          <td>{{$row->name}}</td>
          <td><a href="/blog/category/edit/{{$row->id}}" class="btn btn-light">Edit</button></td>
        </tr>
        @endforeach
      </tbody>
      {{ $list->links() }}
    </table>
  </div>
@endsection