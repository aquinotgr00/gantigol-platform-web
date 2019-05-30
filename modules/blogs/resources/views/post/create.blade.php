 
    
@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/admin/css/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/product/css/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/admin/css/style.css')}}">
@endpush


@section('content')
            <!-- start form -->
            <div class="row pl-3">
              <form class="col-md-6 col-lg7 pl-0" id="form-post-create" action="{{Route('blog.post.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputCategoryName">Blog Title</label>
                  <input type="hidden" name="image" value="">
                  <input type="text" name="title" class="form-control" id="exampleInputCategoryName">
                  @if($errors->has('title'))
                  <small class="text-red">{{$errors->first('title')}}</small>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Blog Category</label>
                  <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                        <option value="">Select Product Category</option>
                        @foreach($categories as $i=>$row)
                          <option value="{{$row->id}}">{{ucfirst($row->name)}}</option>
                        @endforeach
                    </select>
                     @if($errors->has('category_id'))
                    <small class="text-red">{{$errors->first('category_id')}}</small>
                    @endif
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Blog Content</label>
                  <textarea type="text"name="body" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                  @if($errors->has('body'))
                    <small class="text-red">{{$errors->first('body')}}</small>
                    @endif
                </div>
                
                <div class="form-group">
                  <label for="InputCategoryTag">Tags</label>
                  <input type="text" name="tags" class="form-control" id="InputCategoryTag" data-role="tagsinput">
                </div>

                <div class="form-group">
                  <label for="InputCategoryKeywords">Keywords</label>
                  <input type="text" name="keywords" class="form-control" id="InputCategoryKeywords" data-role="tagsinput">
                </div>
                 <div class="d-flex flex-row-reverse">
                  <button class="btn btn-success ml-4">Publish</button>
                  <button type="submit" class="btn btn-outline-secondary" formaction="{{Route('blog.post.store')}}">Save As Draft</button>
                </div>
              </form>
                <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Featured Image</label>
                    <form class="dropzone needsclick" id="demo-upload" action="/upload">
                    </form>
                    <small><span>Image size must be 1920x600 with maximum file size</span>
                    <span>400 kb</span></small>
                  </div>
            </div>
            
            <!-- end form -->
          </div>
        </div>
      </div> 
    </div>
@endsection

@push('scripts')
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="{{asset('vendor/product/js/bootstrap-tagsinput.js')}}"></script>
 <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
      <script>
        tinymce.init({selector:'textarea'});
        $('#form-post-create').on('keyup keypress', function(e) {
          var keyCode = e.keyCode || e.which;
          if (keyCode === 13) { 
            e.preventDefault();
            return false;
          }
        });
      </script>
@endpush