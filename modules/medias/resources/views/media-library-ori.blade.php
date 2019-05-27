        <!doctype html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Media Library</title>

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

                <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.5/jquery.jscroll.min.js"></script>
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
                <style>
                    .h-scroll {
                        height: 80vh; /* %-height of the viewport */
                        position: fixed;
                        overflow-y: scroll;
                    }
                    
                </style>
            </head>
            <body>

            <section>
                <div class="container">
                    <div class="row" >
                        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="gallery-title ">Library</h1>
                            <ul class="nav nav-pills" style="margin-bottom:20px;">
                                <li class="active" ><a data-toggle="pill" href="#nav-1">Media Library</a></li>
                                <li><a data-toggle="pill" href="#nav-2">Upload Media</a></li>
                            </ul>

                        </div>
                         <div class="clearfix"></div>
                    </div>
                   
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 h-scroll pull-left" >
                             
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tab-content">
                                <img  id="loading-render" class="center-block"src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" />
                                <div id="nav-1" class="tab-pane fade in active infinite-scroll list-media">
                                    @include('medias::media-library-list-ori')
                                </div>
                                 <div id="nav-2" class="tab-pane fade in">
                                    <form action="{{ route("projects.store") }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="document">Documents</label>
                                            <div class="needsclick dropzone" id="document-dropzone">

                                            </div>
                                        </div>
                                        <div>
                                            <input class="btn btn-danger" type="submit">
                                        </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pull-right .h-scroll">
                            <div class=".bg-secondary">
                                <div class="form-group">
                                    <div class="row">
                                    <h5 >Media Name</h5>
                                    <input id="title-image" class="form-control" type="text" value="" disabled >
                                    </div>
                                    <div class="row" style="margin-top:50px">
                                        <form method="post" id="form-assign-category" action='{{Route('media.assignMediaCategory')}}'>
                                        <h5 >Media Category</h5>
                                        @csrf
                                        <input type="hidden" id="input-image-id" name="id" value="">
                                        <select name="category" id="category-media-list" class="form-control selectpicker" data-live-search="true">
                                            @foreach($category as $i=>$row)
                                            <option value="{{$row->id}}">{{$row->title}}</option>
                                            @endforeach
                                        </select>
                                        <br/>
                                        <a href="#"data-toggle="modal" data-target="#openModal" >+ new category</a>
                                        <br/>
                                        <button id="button-add-category" type='submit' class="btn btn-default pull-right"> Apply</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            </body>

           <div id="openModalNotification" class="modal fade" role="dialog">
                <div class="modal-dialog"> 
                    <div class="modal-content">
                         <div class="modal-body">
                            <p id="notification-message"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="openModal" class="modal fade" role="dialog">
                <div class="modal-dialog"> 
                    <div class="modal-content">
                         <div class="modal-body">
                             <h4>Add Category</h4>
                            <p>Add new category.</p>
                            <div class="form-group" id="form-category">
                                <input type="text" id="input-category" val="" class="form-control">                  
                            </div>
                             <button onclick="addCategory()"id="button-add-category" class="btn btn-default pull-right">Add</button><br/><br/>
                         </div>
                    </div>
                </div>
            </div>

            <script>
                  var uploadedDocumentMap = {}
                  //dropzone upload
                  Dropzone.options.documentDropzone = {
                    url: '{{ route('projects.storeMedia') }}',
                    maxFilesize: 2, // MB
                    addRemoveLinks: true,
                    headers: {
                      'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function (file, response) {
                      $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                      uploadedDocumentMap[file.name] = response.name
                    },
                    removedfile: function (file) {
                      file.previewElement.remove()
                      var name = ''
                      if (typeof file.file_name !== 'undefined') {
                        name = file.file_name
                      } else {
                        name = uploadedDocumentMap[file.name]
                      }
                      $('form').find('input[name="document[]"][value="' + name + '"]').remove()
                    },
                    init: function () {
                      @if(isset($project) && $project->document)
                        var files =
                          {!! json_encode($project->document) !!}
                        for (var i in files) {
                          var file = files[i]
                          this.options.addedfile.call(this, file)
                          file.previewElement.classList.add('dz-complete')
                          $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                        }
                      @endif
                    }
                  }
                  //add to category section
                  $('.list-media').on('click','.action-image',function() {
                      $('#title-image').val($(this).data('name') )
                      $('#input-image-id').val($(this).data('id'))
                    });

                  //ajax post new category
                    function addCategory() {
                      $('#openModal').modal('hide');
                      $('#notification-message').html("Please wait adding category <img width='64px' src='https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif'>")
                      $('#openModalNotification').modal('show')
                      $.post( "{{ route('media.storeCategory') }}", { title:$('#input-category').val(),'_token': "{{ csrf_token() }}" })
                      .done(function( data ) {
                        addHtml = "<option value='"+data.data.id+"'>"+data.data.title+"</option>"
                        $('#category-media-list').append(addHtml)
                        $("#category-media-list").val(data.data.id);
                        $('#notification-message').html(data.message)
                        $('#category-media-list').selectpicker('refresh');
                      });
                    }

                  //ajax assign category
                  $("#form-assign-category").submit(function(e) {

                        e.preventDefault(); // avoid to execute the actual submit of the form.

                        var form = $(this);
                        var url = form.attr('action');
                        $('#notification-message').html("Please wait Assign category to image <img width='64px' src='https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif'>")
                        $('#openModalNotification').modal('show')

                        $.ajax({
                               type: "POST",
                               url: url,
                               data: form.serialize(), // serializes the form's elements.
                               success: function(data)
                               {
                                  $('#notification-message').html(data.message)
                               }
                             });


                    });
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
            </script>
        </html>
