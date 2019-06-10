
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