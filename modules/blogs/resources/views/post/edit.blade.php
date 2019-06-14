 
    
@extends('admin::layout-nassau')

@push('styles')

<link rel="stylesheet" type="text/css" href="{{asset('vendor/product/css/bootstrap-tagsinput.css')}}">
<style>
    .add-img-featured {
        padding: 10px;
    }
    .img-thumbnail {
        object-fit: scale-down;
    }
</style>
@endpush


@section('content')
            <!-- start form -->
            <div class="row pl-3">
              <form class="col-md-6 col-lg7 pl-0" id="form-post-create" action="{{Route('blog.post.update')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputCategoryName">Blog Title</label>
                  <input type="hidden" name="id" value="{{$id}}">
                  <input type="hidden" id="fieldInputImage" name="image" value="{{$post->image}}">
                  <input type="text" name="title" class="form-control" id="exampleInputCategoryName" value="{{$post->title}}">
                  @if($errors->has('title'))
                  <small class="text-red">{{$errors->first('title')}}</small>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Blog Category</label>
                  <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                        <option value="">Select Product Category</option>
                        @foreach($categories as $i=>$row)
                          <option value="{{$row->id}}" @if($row->id == $post->category_id) selected @endif>{{ucfirst($row->name)}}</option>
                        @endforeach
                    </select>
                     @if($errors->has('category_id'))
                    <small class="text-red">{{$errors->first('category_id')}}</small>
                    @endif
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Blog Content</label>
                  <textarea type="text"name="body" class="form-control" id="exampleFormControlTextarea1" rows="7">{{$post->body}}</textarea>
                  @if($errors->has('body'))
                    <small class="text-red">{{$errors->first('body')}}</small>
                    @endif
                </div>
                
                <div class="form-group">
                  <label for="exampleInputCategoryPrize">Tags</label>
                  <input type="text" name="tags" class="form-control" id="exampleInputCategoryPrize" value="{{implode( ", ", $tags )}}" data-role="tagsinput">
                </div>

                <div class="form-group">
                  <label for="exampleInputCategoryPrize">Keywords</label>
                  <input type="text" name="keywords" class="form-control" id="exampleInputCategoryPrize" value="{{implode( ", ", $tags )}}" data-role="tagsinput">
                </div>
                 <div class="d-flex flex-row-reverse">
                  <button type="submit" class="btn btn-success ml-4" formaction="{{Route('blog.post.publish',$post->id)}}">Publish</button>
                  <button type="submit" class="btn btn-outline-secondary" formaction="{{Route('blog.post.update')}}">Save As Draft</button>
                </div>
              </form>
                <div class="col-md-4 col-lg-5 pl-5 grs">
                    <div class="mb-4">
                        <label>Featured Image</label>
                        <div class="mb-2">
                            @mediaPicker(['singleSelect'=>true, 'onSelect'=>'mediaLibraryGet'])
                                <img src="@if(empty($post->image)){{ asset('vendor/admin/images/image-plus.svg') }}@else{{$post->image}}@endif" id="product-category-image" class="img-fluid img-thumbnail add-img-featured" />
                            @endmediaPicker
                        </div>
                        <small>
                            <span><a href="#" id="removeFeaturedImage">Remove Image</a></span>
                            <span>Image size must be 1920x600 with maximum file size</span>
                            <span>400 kb</span>
                        </small>
                    </div>
                    
                </div>
            
            <!-- end form -->
          </div>
        </div>
      </div> 
    </div>
@endsection
      
@push('scripts')
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
      <script>
  function mediaLibraryGet(selectedMedia) {
        const {id,url} = selectedMedia[0]
        $('#fieldInputImage').val(url)
        $('#product-category-image-id').val(id)
        $('#product-category-image').attr('src',url)
        $('#btn-delete').addClass('optional')
    }
     $('#media-picker .delete').click(function(event) {
        event.preventDefault()
        $('#product-category-image-id').val(null)
        $('#product-category-image').attr('src',$('#product-category-image').data('defaultImage'))
         $('#fieldInputImage').value(null)
        $('#btn-delete').removeClass('optional')
    });
      $('#removeFeaturedImage').click(function(event) {
        $('#product-category-image-id').val(null)
        $('#product-category-image').attr('src','{{ asset('vendor/admin/images/image-plus.svg') }}')
         $('#fieldInputImage').val(null)
        $('#btn-delete').removeClass('optional')
    });
</script>
@endpush