@extends('admin::layout-nassau')

@push('styles')

<link rel="stylesheet" type="text/css" href="{{asset('vendor/product/css/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                  <label for="InputCategoryTag">Image Source</label>
                  <input type="text" name="source_image" class="form-control" value="{{$post->source_image}}"  data-role="author">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Blog Category</label>
                  <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                        <option value="">Select Post Category</option>
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
                  <label for="InputCategoryTag">Author</label>
                  <input type="text" name="author" class="form-control" value="{{$post->author}}"  data-role="author">
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryPrize">Tags</label>
                  <input type="text" name="tags" class="form-control" id="exampleInputCategoryPrize" value="{{implode( ", ", $tags )}}" data-role="tagsinput">
                </div>

                <div class="form-group">
                  <label for="exampleInputCategoryPrize">Keywords</label>
                  <input type="text" name="keywords" class="form-control" id="exampleInputCategoryPrize" value="{{implode( ", ", $tags )}}" data-role="tagsinput">
                </div>
                 @if(empty($post->publish_date))
                  <div class="form-group checkbox" id="schedule-checkbox">
                    <label><input type="checkbox" id="schedule-checkbox-tick"> Schedule Publish Date</label>
                  </div>
                  @endif
                @can('publish-post')
                <div class="form-group @if(empty($post->publish_date)) d-none @endif" id="publish-form">
                  <label for="exampleInputCategoryPrize">Publish Date</label>
                  <input type="text" name="publish_date" class="form-control datepicker" id="" value="{{$post->publish_date}}">
                </div>
                @endcan
                 <div class="d-flex flex-row-reverse">
                  @can('publish-post')
                  <button type="submit" class="btn btn-success ml-4" formaction="{{Route('blog.post.publish',$post->id)}}">Publish</button>
                  @endcan
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
@useTinymce
@push('scripts')
 <script src="{{asset('vendor/product/js/bootstrap-tagsinput.js')}}"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $(function(){

        $( ".datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat:"yy-mm-dd",
        });
        $("#schedule-checkbox-tick").on("click",function(){
         if($( "#schedule-checkbox-tick:checked" ).val() =="on"){
          $("#schedule-checkbox").addClass("d-none")
          $("#publish-form").removeClass("d-none")
          $( ".datepicker" ).datepicker("setDate",new Date())
         }
        })
      })
        var dialogConfigQuote =  {
          title: 'quote text',
          body: {
            type: 'panel',
            items: [
              {
                type: 'input',
                name: 'quote',
                label: 'Enter quote'
              },
              {
                type: 'input',
                name: 'quotewriter',
                label: 'Enter quote writer'
              }
            ]
          },
          buttons: [
            {
              type: 'cancel',
              name: 'closeButton',
              text: 'Cancel'
            },
            {
              type: 'submit',
              name: 'submitButton',
              text: 'Quote',
              primary: true
            }
          ],
          initialData: {
            quote: 'Lorem Ipsum Doloret amet',
            quotewriter:'John Doe'
          },
          onSubmit: function (api) {
            var data = api.getData();

            tinymce.activeEditor.execCommand('mceInsertContent', false, '<blockquote><p>' + data.quote + '</p><footer><small>- '+data.quotewriter+' -</small></footer></blockquote>');
            api.close();
          }
        };

      var dialogConfigHotLink =  {
          title: 'Hot Link',
          body: {
            type: 'panel',
            items: [
              {
                type: 'input',
                name: 'titlepost',
                label: 'Enter title'
              },
              {
                type: 'input',
                name: 'url',
                label: 'Enter url'
              }
            ]
          },
          buttons: [
            {
              type: 'cancel',
              name: 'closeButton',
              text: 'Cancel'
            },
            {
              type: 'submit',
              name: 'submitButton',
              text: 'Hot Link',
              primary: true
            }
          ],
          initialData: {
            titlepost: 'Lorem Ipsum Doloret amet'
          },
          onSubmit: function (api) {
            var data = api.getData();

            tinymce.activeEditor.execCommand('mceInsertContent', false, '<p class="hotlink"><a style="color:red;" href="'+data.url+'">' + data.titlepost + '</a></p>');
            api.close();
          }
        };

        tinymce.init({
          selector:'textarea',
          toolbar: 'dialog-quote-btn|dialog-hotlink-btn|code',
          plugins: ["paste code "
                    ],
           paste_as_text: true,
           setup: function (editor) {
            editor.ui.registry.addButton('dialog-quote-btn', {
              text: 'Quote',
              onAction: function () {
                editor.windowManager.open(dialogConfigQuote)
              }
            }),
            editor.ui.registry.addButton('dialog-hotlink-btn', {
              text: 'Hot Link',
              onAction: function () {
                editor.windowManager.open(dialogConfigHotLink)
              }
            })
          }
        });
        $('#form-post-create').on('keyup keypress', function(e) {
          var keyCode = e.keyCode || e.which;
          if (keyCode === 13) { 
            e.preventDefault();
            return false;
          }
        });
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