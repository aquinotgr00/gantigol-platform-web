@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<style>
    div.dt-buttons {
        float: right;
        margin: 10px;
        display:inline-block;
    }
    .dataTables_filter{
        clear:both;
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.colVis.min.js') }}"></script>
<script>
    function inputResi(obj) {
        var id = $(obj).attr('id');
        if ($(obj).val().length > 0) {
            $('#btn-tbl-' + id).css('display', 'block');
        } else {
            $('#btn-tbl-' + id).css('display', 'none');
        }

    }

    function showModalCourier(obj) {
        var id = $(obj).attr('id');
        var courier_name = $(obj).attr('placeholder');
        var courier_type = $(obj).data('type');
        var courier_fee = $(obj).data('fee');
        $('#ModalInputShippingNumber').modal('show');

        $('input[name="courier_name"]').val(courier_name);
        $('input[name="courier_type"]').val(courier_type);
        $('input[name="courier_fee"]').val(courier_fee);
        $('input[name="production_id"]').val(id);
    }

    $(document).ready(function() {

        var datatables = $('#datatable-shipping').DataTable({
            "ajax": "{{ route('shipping.datatables',$production_batch->id) }}",
            "order": [
                [0, "desc"]
            ],
            "columns": [{
                    "data": "created_at"
                },
                {
                    "data": "invoice"
                },
                {
                    "data": "name"
                },
                {
                    "data": "variant_qty"
                },
                {
                    "data": "courier_name"
                },
                {
                    "data": "tracking_number"
                },
                {
                    "data": "status"
                }
            ],
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print'],
            buttons: {
                buttons: [
                    { extend: 'pdf', className: 'btn btn-line' },
                    { extend: 'excel', className: 'btn btn-line' },
                    { extend: 'print', className: 'btn btn-line' },
                ]
            }

        });

        $('#form-input-shipping-number').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                dataType: "json",
                cache: false,
                success: function(data) {
                    if (typeof data.data.id !== "undefined") {
                        alert('Success ! add shipping number');
                        window.location.href = "{{ route('shipping.transaction',$production_batch->preOrder->id) }}";
                    } else {
                        alert('Error ! faield to add shipping number :(');
                    }
                }
            });

        });

        $('#form-update-courier').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                dataType: "json",
                cache: false,
                success: function(res) {
                    if (res.data.id > 0) {
                        $('#ModalInputShippingNumber').modal('hide');
                    } else {
                        alert('Error! failed to update courier');
                    }
                    location.reload();
                }
            });

        });

        //$('.dt-buttons').css('display', 'none');

        $.each($('.btn-line'), function(key, value) {
            $(value).click(function() {
                var selector = $(value).data('trigger');
                $('.' + selector).click();
            });
        });

    });
</script>
@endpush

@section('content')

<!-- start table -->
<form action="{{ route('store-shipping-number') }}" method="post">
    @csrf
    <input type="hidden" value="{{ $production_batch->id }}" name="batch_id" />
    <div class="table-responsive">
        <table class="table" id="datatable-shipping">
            <thead>
                <tr>
                    <th scope="col">Order Date</th>
                    <th scope="col">Invoice ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Variant Quantity</th>
                    <th scope="col">Courier</th>
                    <th scope="col">Tracking Number</th>
                    <th scope="col">Status</th>

                </tr>
            </thead>
        </table>
    </div>
    <!-- end table -->
    <hr>
    <div class="float-right mt-3">
        <button type="submit" class="btn btn-success ml-4" role="button">
            Send Tracking Number
        </button>
    </div>
</form>

@include('preorder::includes.modal-input-shipping-number')

@endsection
