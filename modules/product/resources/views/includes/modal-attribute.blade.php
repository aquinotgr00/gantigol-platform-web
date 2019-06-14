<!-- Modal Variant Attribute-->
<div class="modal fade" id="ModalVariantAttribute" tabindex="-1" role="dialog" aria-labelledby="exampleModalVariant"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLongTitle">Add Variant Attribute</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container mt-3">
                <div class="mb-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#Attribute-Value">Attribute Value</a>
                        </li>
                        <li class="vr">

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Add-New-Attribute-Value">Add New Attribute
                                Value</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="Attribute-Value" class="tab-pane active">
                        <form action="#" id="form-choose-attribute" method="post">
                            <div id="value"></div>
                            <div class="modal-footer mt-5">
                                <input type="hidden" name="index" />
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div id="Add-New-Attribute-Value" class="tab-pane">
                        <form action="{{ url('admin/ajax/add-by-variant/') }}" id="form-add-value-variant"
                            method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputCategoryRelatedTag">Attribute Value</label>
                                <input type="text" class="form-control" name="value"
                                    id="exampleInputCategoryRelatedTag">
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
<!-- Modal Variant Attribute-->