@extends('blogs::blog-index')

@section('content')
 <div class="row" style="padding:10px">
      <h3 >New Blog Post </h3> 
  </div>
  <div class="row" style="padding:10px">
    <form class="col-10" method="post">
      @csrf
      <div class="form-group ">
         <div class="">
          <label for="categoryNameInput">Category</label>
          <select name="category_id">
            @foreach($categories as $i=>$row)
            <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
       <div class="form-group ">
         <div class="">
          <label for="BlogNameInput">Title</label>
          <input type="text" name="title" class="form-control">
        </div>
      </div>
       <a href="/blog/category"><button type="button" class="btn btn-ligth">Cancel</button></a>
       <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
  </div>

@endsection