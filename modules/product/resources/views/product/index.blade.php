@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@section('content')
<!-- start tools -->
<div class="row mb-3">
    <div class="col">
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
                    <a class="btn sub-circle my-2 my-sm-0" href="{{ route('product.create') }}" role="button">
                        <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
                    </a>
                </form>
            </tool>
        </div>
    </div>
</div>
<!-- end tools -->

<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Images</th>
                <th scope="col">Product Name</th>
                <th scope="col">Current Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

    </table>
</div>
<!-- end table -->


@include('product::includes.modal-adjustment')

@endsection

@push('scripts')
<script>
    function number_format(data) {
        if (data == null) {
            return 0;
        } else {
            return "Rp " + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
    }

    $(document).ready(function () {
        var datatables = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("ajax.all-product") }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            columns: [{
                data: 'created_at'
            },
            {
                data: 'image'
            },
            {
                data: 'name'
            },
            {
                data: 'quantity_on_hand'
            },
            {
                data: 'price'
            },
            {
                data: 'action'
            },
            ],
            order: [[0, "desc"]],
            columnDefs: [{
                "targets": [0],
                "visible": false,
                "searchable": false
            }]
        });

        $('#ModalAdjusment').on('shown.bs.modal', function (e) {
            var button = e.relatedTarget;
            var id = $(button).data('id');
            $('input[name="product_variants_id"]').val(id);

        });

        $('#form-add-adjustment').submit(function (event) {
            event.preventDefault();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                success: function (data) {

                    if (data.id > 0) {
                        $('#ModalAdjusment').modal('hide');
                        location.reload();
                    } else {
                        alert('Error! cant update stock adjustment');
                    }
                }
            });
        });

        $('#dataTable_filter').css('display', 'none');

        $('.search-box').on('keyup', function () {

            datatables.search(this.value).draw();
        });
    });
</script>
@endpush