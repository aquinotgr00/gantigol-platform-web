@extends('admin::layout-nassau')

@push('styles')
@endpush


@section('content')
            <!-- start form -->
            <div class="row pl-3">
              <form class="col-md-6 col-lg7 pl-0" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputCategoryName"> Placement Name</label>
                  <input type="text" class="form-control" name="name" value="{{$result->name}}" id="exampleInputCategoryName">
                </div>
                <div class="float-right">
                  <button type="submit" class="btn btn-success" >Save</button>
                </div>
              </form>
                
            </div>
            
            <!-- end form -->
            @endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endpush