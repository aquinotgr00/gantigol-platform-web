<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin::includes.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendor/preorder/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/preorder/css/fontawesome-free/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/preorder/css/style.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/preorder/images/favicon.png') }}"/>
    @stack('styles')

  </head>
  <body>
  <div>
      <div class="container-fluid">
        <div class="row">
          <!-- start sidebar -->
          <nav class="col-sm-2 sidebar" id="sidebar">
            <img src="{{ asset('vendor/preorder/images/logo-nassau.svg') }}" class="logo logo-nav" alt="logo nassau">
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
                <ul class="collapse list-unstyled" id="productSubmenu">
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
                <a href="#preorderSubmenu" data-toggle="collapse" aria-expanded="false">Pre-Order Management</a>
                <ul class="collapse show  list-unstyled" id="preorderSubmenu">
                  <li>
                      <a  {{ (\Request::route()->getName() == 'list-preorder.index')? 'class=active' : '' }}
                        href="{{ route('list-preorder.index') }}">
                        Pre-Order
                      </a>
                  </li>
                  <li>
                    <a {{ (\Request::route()->getName() == 'list-preorder.index')? 'class=active' : '' }} 
                      href="{{ route('setting-reminder.index') }}">
                      Setting
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#contentSubmenu" data-toggle="collapse" aria-expanded="false">Content Management</a>
                <ul class="collapse list-unstyled" id="contentSubmenu">
                  <li><a href="#">Banner Placement</a></li>
                  <li><a href="#">Banner</a></li>
                  <li><a href="#">Post Category</a></li>
                  <li><a href="#">Post</a></li>
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
            <header id="nav-top" class="pt-4">
              <nav class="navbar navbar-light justify-content-between ">
                <h1>Pre-Order</h1>
                <div class="dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ ucwords(Auth::user()->name) }}
                  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Setting</a>
                      <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                        Logout
                      </a>
                    </div>
                </div>
              </nav>
              <hr>
            </header>
            <!-- end header -->
            @yield('content')

          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->

    @modal(['id'=>'logoutModal','title'=>'Ready to Leave?'])
    @slot('body')
        Select "Logout" below if you are ready to end your current session.
    @endslot
    @slot('footer')
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <form method="post" action="{{ route('admin.logout') }}">
            @csrf
            <button class="btn btn-primary">Logout</button>
        </form>
    @endslot
    @endmodal
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendor/preorder/js/jquery-3.2.1.min.js') }}" ></script>
    <script src="{{ asset('vendor/preorder/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/preorder/js/bootstrap.min.js') }}"></script>

    @stack('scripts')

  </body>
</html>
