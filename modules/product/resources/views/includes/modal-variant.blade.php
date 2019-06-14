<!-- Modal Product Properties-->
<div class="modal fade" id="ModalProductProperties" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Add Product Variant</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body container mt-3">
        <div class="mb-3">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Variant-Attribute">Variant Attribute</a>
            </li>
            <li class="vr">

            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Add-New-Variant">Add New Variant</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div id="Variant-Attribute" class="tab-pane active">
            <form action="#" id="form-submit-variant" method="post">
              <div id="variant"></div>
              <div class="modal-footer mt-5">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>


          <div id="Add-New-Variant" class="tab-pane">
            <form id="form-add-new-variant" action="{{ route('ajax.add-variant') }}" method="post">
              @csrf
              <div class="form-group">
                <label>Variant Attribute Name</label>
                <input type="text" class="form-control" name="attribute" />
              </div>
              <div class="form-group">
                <label>Attribute Value</label>
                <input type="text" class="form-control" name="value" />
                <small>separate with commas</small>
              </div>
              <div class="modal-footer mt-5">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Product Properties-->