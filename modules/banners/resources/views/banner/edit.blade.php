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
                <input type="hidden" value="{{$result->image}}" name="image">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner Title</label>
                  <input type="text" class="form-control" name="title"  value="{{$result->title}}" id="exampleInputCategoryName">
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner URL</label>
                  <input type="link" class="form-control" name="url" value="{{$result->url}}" id="exampleInputCategoryName">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Banner Placement</label>
                  <select class="form-control" name="placement" id="exampleFormControlSelect1">
                        <option>Select Banner Placement</option>
                        @foreach($category as $i =>$row)
                        <option @if($result->placement == $row->id)selected @endif value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputCategoryName">Banner Sequence</label>
                  <input type="number" class="form-control" name="sequence" value="{{$result->sequence}}" id="exampleInputCategoryName">
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
                        <img class="img-fluid img-thumbnail add-img-featured"  src="{{asset('vendor/admin/images/image-plus.svg')}}" alt="" @if(!empty($result->image)) style="background-image:url({{$result->image}})" @endif>
                        
                      </a>
                    </div>
                    <small><span>Image size must be 1920x600 with maximum file size</span>
                    <span>400 kb</span></small>
                  </div>
                
            </div>
@endsection

<!-- Start Modal popup media-->
<div class="modal fade" id="ModalMediaLibrary" tabindex="-1" role="dialog" aria-labelledby="exampleModalMedia" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Media Library</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body container mt-3">
        <div class="mb-3">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#All-Media">All Media</a>
            </li>
            <li class="vr"></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Add-New-Media">Add New Media</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div id="All-Media" class="tab-pane active">
            <div class="row">
              <div class="col">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Categories
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Categories 1</a>
                  <a class="dropdown-item" href="#">Categories 2</a>
                  <a class="dropdown-item" href="#">Categories 3</a>
                  <a class="dropdown-item" href="#">Categories 4</a>
                </div>
              </div>
              <div class="col pgntn">
                <ul class="pagination hidden-xs pull-right">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">«</span>
                          <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">»</span>
                          <span class="sr-only">Next</span>
                      </a>
                    </li>
                    <li class="page-item">of 3</li>
                      </ul>
              </div>
              
            </div>
            
            <div class="row mt-1">
                    <div class="col-md-3">
                      <a href="#" class="h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                      </a>
                      <p class="mt-2 mb-4">asascacadc.jpg</p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" class="h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                      </a>
                      <p class="mt-2 mb-4">asascacadc.jpg</p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" class="h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                      </a>
                      <p class="mt-2 mb-4">asascacadc.jpg</p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" class="h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                      </a>
                      <p class="mt-2 mb-4">asascacadc.jpg</p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" class="h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                      </a>
                      <p class="mt-2 mb-4">asascacadc.jpg</p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" class="h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                      </a>
                      <p class="mt-2 mb-4">asascacadc.jpg</p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" class="h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
                      </a>
                      <p class="mt-2 mb-4">asascacadc.jpg</p>
                    </div>
                    <div class="col-md-3">
                      <a href="#" class="h-100">
                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
                      </a>
                      <p class="mt-2 mb-4">asascacadc.jpg</p>
                    </div>
            </div>
            <div class="modal-footer mt-1">
              <button type="button" class="btn btn-success">Submit</button>
            </div>
            
          </div>
          <div id="Add-New-Media" class="tab-pane">
            <div id="dropzone">
              <form class="dropzone dropzone-media needsclick dz-clickable" id="demo-upload" action="/upload">
                <div class="message-dz">
                  <h1>Drop Files To Upload</h1>
                  <p>or click to browse</p>
                </div>
                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
              </form>
            </div>
            <div class="float-right mt-3">
              <button type="submit" class="btn btn-success" formaction="#">Upload</button>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

<!-- End Modal popup media-->

    
@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endpush