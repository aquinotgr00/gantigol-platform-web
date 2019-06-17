@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
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
        var production_json = $('#p-production-json').val();

        var selected = JSON.parse(production_json);

        $('#heading-start-production-date').text(selected.start_production_date);
        $('#heading-end-production-date').text(selected.end_production_date);
        $('#heading-status').text(selected.status.toUpperCase());


        var dataTable = $('#datatable-shipping').DataTable({
            "data": selected.get_productions,
            "columns": [{
                    "data": "get_transaction.created_at"
                },
                {
                    "data": "get_transaction.invoice",
                    "render": function(data, type, row) {
                        return '<a href="{{ url('admin/show-transaction') }}/' + row.get_transaction.id + '?preorder={{ $preOrder->id }}">' + data + '</a>';
                    }
                },
                {
                    "data": "get_transaction.name"
                },
                {
                    "data": "get_transaction.orders",
                    "render": function(data, type, row) {
                        var qty_s = 0;
                        var qty_m = 0;
                        var qty_l = 0;
                        var qty_xl = 0;
                        var qty_n = 0;
                        var output = "";
                        $.each(data, function(key, val) {
                            var size_code = val.product_variant.size_code;

                            if (size_code.length > 0) {
                                size_code = size_code.toLowerCase();
                            }

                            switch (size_code) {
                                case 's':
                                    qty_s += parseInt(val.qty);
                                    break;
                                case 'm':
                                    qty_m += parseInt(val.qty);
                                    break;
                                case 'l':
                                    qty_l += parseInt(val.qty);
                                    break;
                                case 'xl':
                                    qty_xl += parseInt(val.qty);
                                    break;
                                default:
                                    qty_n += val.qty;
                                    break;
                            }
                        });
                        output += "S : " + qty_s + "<br/>";
                        output += "M : " + qty_m + "<br/>";
                        output += "L : " + qty_l + "<br/>";
                        output += "XL : " + qty_xl + "<br/>";
                        return output;
                    }
                },
                {
                    "data": "get_transaction.courier_name",
                    "render": function(data, type, row) {

                        var input = '<input type="text" name="courier_name[]"';
                        input += ' onclick="showModalCourier(this)" ';
                        input += ' class="form-control form-table form-success"';
                        input += ' id="' + row.id + '"';
                        input += ' data-fee="' + row.get_transaction.courier_fee + '"';
                        input += ' data-type="' + row.get_transaction.courier_type + '"';
                        input += ' placeholder="' + data + '">';
                        return input;
                    }
                },
                {
                    "data": "tracking_number",
                    "render": function(data, type, row) {
                        var input = '<div class="input-group-append">';
                        input += "<input type='hidden' value='" + row.id + "' name='production_id[]' />";
                        input += '<input type="text" name="tracking_number[]" class="form-control form-table form-success" id="' + row.id + '" placeholder="' + data + '">';
                        input += '<button class="btn btn-tbl" id="btn-tbl-' + row.id + '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Submit" style="display:none;">';
                        input += '</button></div>';
                        return input;
                    }
                },
                {
                    "data": "status",
                    "render": function(data, type, row) {
                        return data.replace(/_/g, " ").toUpperCase();
                    }
                }
            ],
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print']
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
                        window.location.href = "{{ route('shipping.transaction',$preOrder->id) }}";
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

        $('.dt-buttons').css('display', 'none');

        $.each($('.btn-line'), function(key, value) {
            $(value).click(function(){
                var selector = $(value).data('trigger');
                $('.'+selector).click();
            });
        });

    });
</script>
@endpush

@section('content')
<!-- start tools -->

<div class="row mb-3">
    <div class="col col-md-4 mt-4">
        <div>
            <small>Summary Order :</small>
            <span class="Summary-ord">M : 10 L : 10 XL : 10</span>
        </div>
        <div>
            <small>Total Order : </small>
            <span class="Summary-ord">30</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class=" form-group float-right mr-2">
            <div>
                <label>Export Data</label>
            </div>
            <div class="btn-group" role="group" aria-label="#">
                <button type="button" data-trigger="buttons-pdf" class="btn btn-line">PDF</button>
                <button type="button" data-trigger="buttons-excel" class="btn btn-line">Excel</button>
                <button type="button" data-trigger="buttons-print" class="btn btn-line">Print</button>
            </div>
        </div>
    </div>
</div>
<!-- end tools -->

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

<input type="hidden" id="p-production-json" value="{{ (isset($production_json))? $production_json : '[]' }}" readonly />

@include('preorder::includes.modal-input-shipping-number')

@endsection