@extends('blogs::blog-index')

@section('content')
 <div class="row" style="padding:10px">
      <h3 >New Blog Categories : {{$data->name}}</h3> 
  </div>
  <div class="row" style="padding:10px">
    <form class="col-10" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$data->id}}">
      <div class="form-group ">
         <div class="">
          <label for="categoryNameInput">Category Name</label>
          <input type="text" name="name" class="form-control" value="{{$data->name}}">
        </div>
      </div>
       <a href="/blog/category"><button type="button" class="btn btn-ligth">Cancel</button></a>
       <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
  </div>

@endsection