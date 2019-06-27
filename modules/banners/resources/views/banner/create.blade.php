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
                <input type="hidden" id="fieldInputImage" value="" name="image">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputCategoryName">
                  @if($errors->has('title'))
                  <small class="text-red">{{$errors->first('title')}}</small>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner URL</label>
                  <input type="link" class="form-control" name="url" id="exampleInputCategoryName">
                  @if($errors->has('url'))
                  <small class="text-red">{{$errors->first('url')}}</small>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Banner Placement</label>
                  <select class="form-control" name="placement" id="exampleFormControlSelect1">
                        <option value="">Select Banner Placement</option>
                        @foreach($category as $i =>$row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('placement'))
                  <small class="text-red">{{$errors->first('placement')}}</small>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner Sequence</label>
                  <input type="number" class="form-control" name="sequence" id="exampleInputCategoryName">
                </div>
                @if($errors->has('sequence'))
                  <small class="text-red">{{$errors->first('sequence')}}</small>
                  @endif
                <div class="float-right">
                  <button type="submit" class="btn btn-success" >Submit</button>
                </div>
              </form>

               <div class="col-md-4 col-lg-5 pl-5 grs">
                    <div class="mb-4">
                        <label>Featured Image</label>
                        <div class="mb-2">
                            @mediaPicker(['singleSelect'=>true, 'onSelect'=>'mediaLibraryGet'])
                                <img src="{{ asset('vendor/admin/images/image-plus.svg') }}" id="product-category-image" class="img-fluid img-thumbnail add-img-featured" />
                            @endmediaPicker
                        </div>
                        @if($errors->has('image'))
                        <small class="text-red">{{$errors->first('image')}}</small>
                        @endif
                        <small>
                           <span><a href="#" id="removeFeaturedImage">Remove Image</a></span>
                            <span>Image size must be 1920x1080 with maximum file size</span>
                            <span>2024 kb</span>
                        </small>
                    </div>
                    
                </div>
@endsection



    
@push('scripts')
<script type="text/javascript">
   //pagination
                    $(function() {
                        $("#loading-render").hide();

                        $('body').on('click', '.pagination a', function(e) {
                            e.preventDefault();
                            $("#loading-render").show();
                            $(".loaded-media").hide();
                            var url = $(this).attr('href');  
                            getMedia(url);
                            window.history.pushState("", "", url);
                        });

                        function getMedia(url) {
                            $.ajax({
                                url : url  
                            }).done(function (data) {
                                $("#loading-render").hide();
                                $(".loaded-media").show();
                                $('.list-media').html(data);  
                            }).fail(function () {
                                $("#loading-render").hide();
                                $(".loaded-media").show();
                                alert('Media could not be loaded.');
                            });
                        }
                    });
  $('body').on('click', '.list-media-picker', function(e) {
    $('.list-media-picker').removeClass( "pickedImage" )
    $(this).addClass( "pickedImage" )
    
  })
  $('body').on('click', '#buttonSelectImage', function(e) {
    $('#fieldInputImage').val($('.pickedImage').data('src'))
    $('.add-img-featured').attr({ "src": $('.pickedImage').data('src') })
  })
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