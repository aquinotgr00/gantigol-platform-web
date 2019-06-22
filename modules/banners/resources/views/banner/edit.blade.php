@extends('admin::layout-nassau')

@push('styles')
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
              <form class="col-md-6 col-lg7 pl-0" method="post">
                @csrf
                <input type="hidden" id="fieldInputImage" value="{{$result->image}}" name="image">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner Title</label>
                  <input type="text" class="form-control" name="title"  value="{{$result->title}}" id="exampleInputCategoryName">
                  @if($errors->has('title'))
                  <small class="text-red">{{$errors->first('title')}}</small>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner URL</label>
                  <input type="link" class="form-control" name="url" value="{{$result->url}}" id="exampleInputCategoryName">
                  @if($errors->has('url'))
                  <small class="text-red">{{$errors->first('url')}}</small>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Banner Placement</label>
                  <select class="form-control" name="placement" id="exampleFormControlSelect1">
                        <option value="">Select Banner Placement</option>
                        @foreach($category as $i =>$row)
                        <option @if($result->placement == $row->id)selected @endif value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('placement'))
                  <small class="text-red">{{$errors->first('placement')}}</small>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner Sequence</label>
                  <input type="number" class="form-control" name="sequence" value="{{$result->sequence}}" id="exampleInputCategoryName">
                  @if($errors->has('sequence'))
                  <small class="text-red">{{$errors->first('sequence')}}</small>
                  @endif
                </div>
                <div class="float-right">
                  <button type="submit" class="btn btn-success" >Submit</button>
                </div>
              </form>

                <div class="col-md-4 col-lg-5 pl-5 grs">
                    <div class="mb-4">
                        <label>Featured Image</label>
                        <div class="mb-2">
                            @mediaPicker(['singleSelect'=>true, 'onSelect'=>'mediaLibraryGet'])
                                <img src="@if(empty($result->image)){{ asset('vendor/admin/images/image-plus.svg') }}@else{{$result->image}}@endif" id="product-category-image" class="img-fluid img-thumbnail add-img-featured" />
                            @endmediaPicker
                        </div>
                        @if($errors->has('image'))
                            <small class="text-red">{{$errors->first('image')}}</small>
                        @endif
                        <small>
                           <span><a href="#" id="removeFeaturedImage">Remove Image</a></span>
                            <span>Image size must be 1920x1080 with maximum file size</span>
                            <span>400 kb</span>
                        </small>
                    </div>
                    
                </div>
@endsection

<!-- Start Modal popup media-->

<!-- End Modal popup media-->

    
@push('scripts')
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