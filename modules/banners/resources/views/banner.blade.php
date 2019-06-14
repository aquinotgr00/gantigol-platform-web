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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

    <title>Banner</title>
  </head>
  <body>
  	
    <div>
      <div class="container-fluid">
        <div class="row">
          <!-- start sidebar -->
         <nav class="col-sm-2 sidebar" id="sidebar">
            <img src="images/logo-nassau.svg" class="logo logo-nav" alt="logo nassau">
            <hr>
            <ul class="nav flex-column nav-item">
              <li>
                <a href="#">Summary</a>
              </li>
              <li>
                <a href="#">Media Library</a>
              </li>
              <li>
                <a href="#productSubmenu" data-toggle="collapse" aria-expanded="false">Product Management</a>
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
                <a href="#contentSubmenu" data-toggle="collapse" aria-expanded="true">Content Management</a>
                <ul class="collapse show list-unstyled" id="contentSubmenu">
                  <li><a href="#">Banner Placement</a></li>
                  <li><a class="active" href="#">Banner</a></li>
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
            <header id="nav-top"class="pt-4">
              <nav class="navbar navbar-light justify-content-between ">
                <h1>Banner</h1>
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

            <!-- start tools -->
            <div>
                  <tool class="navbar navbar-expand-lg">
                  <form class="form-inline my-2 my-lg-0">
                      <div class="input-group srch">
                      <input type="text" class="form-control search-box" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="button">
                              <i class="fa fa-search"></i>
                            </button>
                         </div>
                    </div>
                      <a class="btn sub-circle my-2 my-sm-0" href="add-new-banner.html" role="button">
                        <img class="add-svg" src="images/add.svg" alt="add-image">
                      </a>
                  </form>
              </tool>
            </div>
            <!-- end tools -->

            <!-- start pagination -->
            <div>
              <div class="row">
                <div class="col col-xs-4 pgntn">Showing 1 to 5 of 24 enteries</div>
                <div class="col col-xs-8 pgntn">
                      <ul class="pagination hidden-xs pull-right">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                      </a>
                    </li>
                    <li class="page-item">of 3</li>
                      </ul>
                  </div>
              </div>
            </div>
            <!-- end pagination -->

            <!-- start table -->
            <div class="table-responsive">
              <table class="table">
              <thead>
                  <tr>
                      <th scope="col">Banner Title</th>
                      <th scope="col">Placement Name</th>
                      <th scope="col">Sequence</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <th>Liverpool Menang</th>
                      <td>Home</td>
                      <td>1</td>
                      <td>
                        <a href="#" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                        <a href="#" class="btn btn-table circle-table show-table" data-toggle="tooltip" data-placement="top" title="Hide On Website"></a>
                        <a href="#" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="Delete"></a>
                      </td>
                  </tr>
                  <tr>
                      <th>Madura FC Kalah</th>
                      <td>Home</td>
                      <td>2</td>
                      <td>
                        <a href="#" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                        <a href="#" class="btn btn-table circle-table show-table" data-toggle="tooltip" data-placement="top" title="Hide On Website"></a>
                        <a href="#" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="Delete"></a>
                      </td>
                  </tr>
                  <tr>
                      <th>Formasi Bola</th>
                      <td>Static Post</td>
                      <td>1</td>
                      <td>
                        <a href="#" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                        <a href="#" class="btn btn-table circle-table hide-table" data-toggle="tooltip" data-placement="top" title="Show On Website"></a>
                        <a href="#" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="Delete"></a>
                      </td>
                  </tr>
                  <tr>
                      <th>Preorder GG Desain #5</th>
                      <td>Shop</td>
                      <td>1</td>
                      <td>
                        <a href="#" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                        <a href="#" class="btn btn-table circle-table show-table" data-toggle="tooltip" data-placement="top" title="Hide On Website"></a>
                        <a href="#" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="Delete"></a>
                      </td>
                  </tr>
                </tbody>
            </table>
            </div>
            <!-- end table -->


            <!-- start pagination -->
            <br/>
            <hr>
            <div>
              <div class="row">
                <div class="col col-xs-4 pgntn">Showing 1 to 5 of 24 enteries</div>
                <div class="col col-xs-8 pgntn">
                      <ul class="pagination hidden-xs pull-right">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                      </a>
                    </li>
                    <li class="page-item">of 3</li>
                      </ul>
                  </div>
              </div>
            </div>
            <!-- end pagination -->
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>$('[data-toggle="tooltip"]').tooltip()</script>
    <script src="js/dropzone.js"></script>
  </body>
</html>