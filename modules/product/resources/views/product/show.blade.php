@extends('admin::layout-nassau')

@section('content')

<div class="row pl-3">
    <form class="col-md-6 col-lg7 pl-0">
        <div class="form-group">
            <label for="exampleInputCategoryName">{{ ucwords($product->name) }}</label>
            <p>
                {{ $product->description }}
            </p>
            <br />
            <p>- Kaos</p>
            <p>- Kerah bulat</p>
            <p>- Soft</p>
            <p>- Warna : Hitam</p>
            <p>- Lengan pendek</p>
            <p>- Sablon: Berbahan dasar air</p>
        </div>
        <div class="row">
            <div class="col-sm form-group">
                <label for="#">SKU</label>
                <p>TSARB02</p>
            </div>
            <div class="col-sm form-group">
                <label>Price</label>
                <p>Rp.123456</p>
            </div>
            <div class="col-sm form-group">
                <label>Stock</label>
                <p>200</p>
            </div>
            <div class="col-sm form-group">
                <label>Category</label>
                <p>Men » Top</p>
            </div>
        </div>
        <div class="mt-3">
            <label>Log Activity</label>
            <hr class="mt-0">
        </div>
        <div class="dropdown mt-4">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter Activity
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Add Stock</a>
                <a class="dropdown-item" href="#">Reduce Stock</a>
                <a class="dropdown-item" href="#">Change Description</a>
                <a class="dropdown-item" href="#">Change Image</a>
            </div>
        </div>
        <div class="col-xs-4 pgntn mt-4">Showing 1 to 5 of 24 enteries</div>
        <div class="table-responsive">
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>18-03-2019
                            <br /><small>20:28:00</small></th>
                        <td>Admin 01</td>
                        <td>Add Stock</td>
                        <td>Tambah Stock Karena Habis</td>
                    </tr>
                    <tr>
                        <th>18-03-2019
                            <br /><small>20:28:00</small></th>
                        <td>Admin 01</td>
                        <td>Change Description</td>
                    </tr>
                    <tr>
                        <th>18-03-2019
                            <br /><small>20:28:00</small></th>
                        <td>Admin 02</td>
                        <td>Change Image</td>
                    </tr>
                    <tr>
                        <th>18-03-2019
                            <br /><small>20:28:00</small></th>
                        <td>Admin 03</td>
                        <td>Reduce Stock</td>
                        <td>Salah Hitung</td>
                    </tr>
                    <tr>
                        <th>18-03-2019
                            <br /><small>20:28:00</small></th>
                        <td>Admin 04</td>
                        <td>Reduce Stock</td>
                        <td>Barang untuk Endorsment</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>

    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
        <label for="exampleFormControlSelect1">Featured Image</label>
        <form class="dropzone no-bg hovereffect" id="demo-upload">
            <img class="img-fluid align-middle" src="{{ asset('vendor/admin/images/product-images/sample-upload.png') }}" alt="">
            <div class="overlay">
                <div class="row mr-btn">
                    <div class="col pl-4">
                        <a href="#" class="btn btn-table circle-table view-img" data-toggle="tooltip"
                            data-placement="top" title="View"></a>
                    </div>
                    <div class="col pr-4">
                        <a href="#" class="btn btn-table circle-table edit-table" data-toggle="tooltip"
                            data-placement="top" title="Edit"></a>
                    </div>
                </div>

            </div>
        </form>
        <small><span>Image size must be 1920x600 with maximum file size</span>
            <span>400 kb</span></small>
    </div>
</div>

@endsection

@push('scripts')
<script>

</script>
@endpush