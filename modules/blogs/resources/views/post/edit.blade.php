<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/template/css/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/template/css/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/template/css/style.css')}}">
    
    <link rel="shortcut icon" type="image/png" href="{{asset('vendor/template/images/favicon.png')}}"/>

    <title>Blog</title>
  </head>
  <body>
  	
    <div>
      <div class="container-fluid">
        <div class="row">
          <!-- start sidebar -->
          <nav class="col-sm-2 sidebar" id="sidebar">
            <img src="{{asset('vendor/template/images/logo-nassau.svg')}}" class="logo logo-nav" alt="logo nassau">
            <hr>
            <ul class="nav flex-column nav-item">
              <li>
                <a href="#">Summary</a>
              </li>
              <li>
                <a href="#">Media Library</a>
              </li>
              <li>
                <a href="#productSubmenu" data-toggle="collapse" aria-expanded="true">Product Management</a>
                <ul class="collapse  list-unstyled" id="productSubmenu">
                  <li><a href="product-category.html">Product Categoies</a></li>
                  <li><a href="#">Product Variant</a></li>
                  <li><a href="#">Product Size Chart</a></li>
                  <li><a href="product.html">Product</a></li>
                </ul>
              </li>
              <li>
                <a href="#orderSubmenu" data-toggle="collapse" aria-expanded="false">Order Management</a>
                <ul class="collapse list-unstyled" id="orderSubmenu">
                  <li><a href="#">Paid Order</a></li>
                  <li><a href="#">Transaction</a></li>
                </ul>
              </li>
              <li>
                <a href="#preorderSubmenu" data-toggle="collapse" aria-expanded="false">Prerder Management</a>
                <ul class="collapse list-unstyled" id="preorderSubmenu">
                  <li><a href="#">Pre-Order</a></li>
                  <li><a href="#">Transaction</a></li>
                </ul>
              </li>
              <li>
                <a href="#contentSubmenu" data-toggle="collapse" aria-expanded="false">Content Management</a>
                <ul class="collapse show list-unstyled" id="contentSubmenu">
                  <li><a href="#">Banner Placement</a></li>
                  <li><a href="#">Banner</a></li>
                  <li><a href="#">Post Category</a></li>
                  <li><a class="active" href="#">Post</a></li>
                </ul>
              </li>
              <li>
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false">User Management</a>
                <ul class="collapse list-unstyled" id="userSubmenu">
                  <li><a href="#">Customers</a></li>
                  <li><a href="#">Administrator</a></li>
                </ul>
              </li>
              <li>
                <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false">Report</a>
                <ul class="collapse list-unstyled" id="reportSubmenu">
                  <li><a href="#">Sales Report</a></li>
                  <li><a href="#">Blog Report</a></li>
                </ul>
              </li>


            </ul>
          </nav>
          <!-- end sidebar -->

          <!-- start header -->
          <div class="col-md-9 ml-sm-auto col-lg-10 main">
            <header id="nav-top"class="pt-4">
              <nav class="navbar navbar-light justify-content-between ">
                <div class="row pl-3">
                  <a href="product.html" class="btn btn-table circle-table back-head" title="back"></a>
                  
                <h1>Edit Post {{$post->title}}</h1>
                </div>
                <div class="dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">admin-01</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Setting</a>
                      <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
              </nav>
              <hr>
            </header>
            <!-- end header -->
            <!-- start form -->
            <div class="row pl-3">
              <form class="col-md-6 col-lg7 pl-0" id="form-post-create" action="{{Route('blog.post.update')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputCategoryName">Blog Title</label>
                  <input type="hidden" name="id" value="{{$id}}">
                  <input type="hidden" id="featured_image" name="image" value="{{$post->image}}">
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
                <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Featured Image</label>
                    <form class="dropzone needsclick" id="demo-upload" action="/upload">
                    </form>
                    <small><span>Image size must be 1920x600 with maximum file size</span>
                    <span>400 kb</span></small>
                    @if($errors->has('image'))
                    <small class="text-red">{{$errors->first('image')}}</small>
                    @endif
                  </div>
            </div>
            
            <!-- end form -->
          </div>
        </div>
      </div> 
    </div>

      

      

      
  	
  	

    <!-- start footer -->
    <footer  class="mb-3 footer">
      <div class="col-2"></div>
      <div class="col-md-9 ml-sm-auto col-lg-10 pt-4">
        <hr>
        <p>Powered by Nassau 2019. All right reserved</p> 
      </div>
      
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('vendor/template/js/bootstrap-tagsinput.js')}}"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
      <script>
        $('[data-toggle="tooltip"]').tooltip()
        tinymce.init({selector:'textarea'});
        $('#form-post-create').on('keyup keypress', function(e) {
          var keyCode = e.keyCode || e.which;
          if (keyCode === 13) { 
            e.preventDefault();
            return false;
          }
        });
      </script>

  </body>
</html>