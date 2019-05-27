@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<!-- data table -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
      <script>
        $(function() {
            $('#post-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('blog.post.list') !!}',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'name', name: 'name' },
                    { data: 'create_date', name: 'create_date' },
                    { data: 'published_date', name: 'published_date' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
      </script>
@endpush
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