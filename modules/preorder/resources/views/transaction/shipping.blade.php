@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css" rel="stylesheet">

@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.select.min.js') }}"></script>
<script>
    function inputResi(obj) {
        var id = $(obj).attr('id');
        if ($(obj).val().length > 0) {
            $('#btn-tbl-' + id).css('display', 'block');
        } else {
            $('#btn-tbl-' + id).css('display', 'none');
        }

    }
    $(document).ready(function () {
        var production_json = $('#p-production-json').val();

        var selected = JSON.parse(production_json);

        $('#heading-start-production-date').text(selected.start_production_date);
        $('#heading-end-production-date').text(selected.end_production_date);
        $('#heading-status').text(selected.status.toUpperCase());


        $('#datatable-shipping').DataTable({
            "data": selected.get_productions,
            "columns": [
                { "data": "get_transaction.created_at" },
                { "data": "get_transaction.invoice" },
                { "data": "get_transaction.name" },
                {
                    "data": "get_transaction.orders",
                    "render": function (data, type, row) {
                        var qty_s = 0;
                        var qty_m = 0;
                        var qty_l = 0;
                        var qty_xl = 0;
                        var qty_n = 0;
                        var output = "";
                        $.each(data, function (key, val) {
                            switch (val.size) {
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
                { "data": "get_transaction.courier_name" },
                {
                    "data": "tracking_number",
                    "render": function (data, type, row) {
                        var input = '<div class="input-group-append">';
                        input += "<input type='hidden' value='" + row.id + "' name='production_id[]' />";
                        input += '<input type="text" onkeyup="inputResi(this)" name="tracking_number[]" class="form-control form-table form-success" id="' + row.id + '" placeholder="' + data + '">';
                        input += '<button class="btn btn-tbl" id="btn-tbl-' + row.id + '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Submit" style="display:none;">';
                        input += '</button></div>';
                        return input;
                    }
                },
                {
                    "data": "status",
                    "render": function (data, type, row) {
                        return data.replace(/_/g, " ").toUpperCase();
                    }
                }
            ]
        });

        $('#form-input-shipping-number').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                dataType: "json",
                cache: false,
                success: function (data) {
                    if (typeof data.data.id !== "undefined") {
                        alert('Success ! add shipping number');
                        window.location.href = "{{ route('shipping.transaction',$preOrder->id) }}";
                    } else {
                        alert('Error ! faield to add shipping number :(');
                    }
                }
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
                <button type="button" class="btn btn-line">PDF</button>
                <button type="button" class="btn btn-line">Excel</button>
                <button type="button" class="btn btn-line">Print</button>
            </div>
        </div>
    </div>
</div>
<!-- end tools -->

<!-- start table -->
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
    <a class="btn btn-success ml-4" role="button">Send Tracking Number</a>
</div>

<input type="hidden" id="p-production-json" value="{{ (isset($production_json))? $production_json : '[]' }}" readonly />
@endsection
