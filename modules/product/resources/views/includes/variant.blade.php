<div class="form-group">
    <label for="exampleFormControlTextarea1">Product Variant</label>
    <div class="inline-form">
        <div class="inline-row pb-3 mb-3 prod-prop">

            <!--<span class="badge badge-pill badge-primary mr-3">Size</span>-->

            <a class="btn sub-circle my-2 my-sm-0 btn-add-variant" role="button" data-toggle="modal"
                data-target="#ModalProductProperties">
                <img class="add-svg" src="{{ url('vendor/admin/images/add.svg')  }}" alt="add-image">
            </a>
        </div>
        <div id="variant-attributes"></div>
    </div>
</div>
<div class="form-group d-flex flex-row-reverse">
    <button type="button" class="btn btn-success ml-4" id="btn-generate-variant" >Generate Variant</button>
</div>
<table class="table">
    <thead>
        <tr>
            <th >Variant</th>
            <th >Properties</th>
        </tr>
    </thead>
    <tbody id="input-generate-variant"></tbody>
</table>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Keywords</label>
    <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <small>separate with commas</small>
</div>
<div class="form-group">
    <label for="exampleInputCategoryRelatedTag">Related Tag</label>
    <input type="text" data-role="tagsinput" class="form-control" id="exampleInputCategoryRelatedTag">
    <small>separate with commas</small>
</div>