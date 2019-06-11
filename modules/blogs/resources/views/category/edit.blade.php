@extends('admin::layout-nassau')

@push('styles')
@endpush


@section('content')
         
            <!-- start form -->
            <div class="row pl-3">
              <form class="col-md-6 col-lg7 pl-0" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Category Name</label>
                  <input type="text" name="name" class="form-control" value="{{$category->name}}" id="exampleInputCategoryName">
                </div>
                <div class="float-right">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
                
            </div>
            
            <!-- end form -->
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endpush