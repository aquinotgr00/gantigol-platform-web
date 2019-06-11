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
              <form class="col-md-6 col-lg7 pl-0" method="post">
                @csrf
                <input type="hidden" id="fieldInputImage" value="" name="image">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputCategoryName">
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner URL</label>
                  <input type="link" class="form-control" name="url" id="exampleInputCategoryName">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Banner Placement</label>
                  <select class="form-control" name="placement" id="exampleFormControlSelect1">
                        <option>Select Banner Placement</option>
                        @foreach($category as $i =>$row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner Sequence</label>
                  <input type="number" class="form-control" name="sequence" id="exampleInputCategoryName">
                </div>
                <div class="float-right">
                  <button type="submit" class="btn btn-success" >Submit</button>
                </div>
              </form>

                <div class="col-md-4 col-lg-5 pl-5 grs">
                  <div class="mb-4">
                    <label for="exampleFormControlSelect1">Featured Images</label>
                    <div class="mb-2">
                      <a href="#" data-toggle= modal role="button" data-target="#ModalMediaLibrary">
                        <img class="img-fluid img-thumbnail add-img-featured" src="{{asset('vendor/admin/images/image-plus.svg')}}" alt="">
                        
                      </a>
                    </div>
                    <small><span>Image size must be 1920x600 with maximum file size</span>
                    <span>400 kb</span></small>
                  </div>
                
                </div>
                @include('banners::component.media-modal')
@endsection



    
@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
      var uploadedDocumentMap = {}
//dropzone upload
Dropzone.options.documentDropzone = {
  url: '{{ route('projects.storeMedia') }}',
  maxFilesize: 2, // MB
  addRemoveLinks: true,
  headers,
  success: function (file, response) {
    $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
    uploadedDocumentMap[file.name] = response.name
  },
  removedfile: function (file) {
    file.previewElement.remove()
    let name = ''
    if (typeof file.file_name !== 'undefined') {
      name = file.file_name
    } else {
      name = uploadedDocumentMap[file.name]
    }
    $('form').find('input[name="document[]"][value="' + name + '"]').remove()
  }

}
@endpush