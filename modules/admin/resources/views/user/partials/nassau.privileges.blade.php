<div class="form-group col-md-4 col-lg-5 pl-5 grs">
    <label for="exampleFormControlSelect1">Privilage Management</label>
    <select class="form-control" id="exampleFormControlSelect1">
        <option>Select Role</option>
        <option data-toggle="collapse" href="#collapseSuperAdmin" aria-expanded="false"
            aria-controls="collapseSuperAdmin">Super Admin</option>
        <option data-toggle="collapse" href="#collapseWarehouse" aria-expanded="false"
            aria-controls="collapseWarehouse">Warehouse</option>
        <option>Editor</option>
        <option>Author</option>
    </select>
    <div class="collapse show" id="collapseSuperAdmin">

        <div>
            <ul class="flex-column privilage-item">
                <li>
                    <a href="#PrivilageMediaLibrary" data-toggle="collapse" aria-expanded="false">Media Library</a>
                    <hr>
                    <ul class="collapse list-privilage" id="PrivilageMediaLibrary">
                        <li>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="UploadNewMedia">
                                <label class="form-check-label style-privilage" for="UploadNewMedia">Upload New
                                    Media</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="ChangeMediaCategory">
                                <label class="form-check-label style-privilage" for="ChangeMediaCategory">Change Media
                                    category</label>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <ul class="flex-column privilage-item">
                <li>
                    <a href="#PrivilageProductCategories" data-toggle="collapse" aria-expanded="false">Product
                        Categories</a>
                    <hr>
                    <ul class="collapse list-privilage" id="PrivilageProductCategories">
                        <li>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="AddNewCategories">
                                <label class="form-check-label style-privilage" for="AddNewCategories">Add New
                                    Categories</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="EditCategories">
                                <label class="form-check-label style-privilage" for="EditCategories">Edit
                                    Categories</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="DeleteCategories">
                                <label class="form-check-label style-privilage" for="DeleteCategories">Delete
                                    Categories</label>
                            </div>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>