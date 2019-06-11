@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush

@section('content')

{{ Form::open(['route' => 'stockopname.store','id'=>'form-stok-opnam']) }}

<div class="row">
    <div class="col-4 {{ $errors->has('date') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Date', ["class" => "control-label"]) }}
        {{ Form::text('date', $lastOpnameDate, ['class' => 'form-control date', "required"] ) }}

        @if($errors->has('date'))
        <span class="help-block">
            <strong>{{ $errors->first('date') }}</strong>
        </span>

        @endif
    </div>
    <div class="col-8">
        <div class="text-right">
            <div class="form-group">
                <div id="nav-first">
                    {{ link_to(url()->previous(), $title = 'Cancel', $attributes = ['class'=>'btn btn-default'], $secure = null) }}
                    {{ Form::button('Add Stock Opname',['class'=>'btn btn-primary','id'=>'btn-confirm']) }}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col">
        <table class="table table-bordered" id="dataTable" role="grid" aria-describedby="dataTable_info"
            style="width: 100%;">
            <thead>
                <tr role="row">
                    <th>No.</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Size</th>
                    <th>SKU</th>
                    <th>Quantity On Hand</th>
                    <th>Counted</th>
                    <th>Counted</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productVariants as $i=>$variant)
                @isset($variant->product)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$variant->product->name}}</td>
                    <td>
                        @include('inventory::partials.productcategory-entry', [ 'productCategory' =>
                        $variant->product->category ])
                    </td>
                    <td>{{$variant->size_code}}</td>
                    <td>{{$variant->sku}}</td>
                    <td>{{$variant->quantity_on_hand}}</td>
                    <td>
                        {{ Form::hidden('opnam['.$i.'][product_variants_id]', $variant->id) }}
                        {{ Form::text('opnam['.$i.'][qty]', null,['class'=>'form-control input-sm qty', 'required', 'data-qoh'=>$variant->quantity_on_hand, 'data-row-index'=>$i]) }}
                        {{ Form::hidden('opnam['.$i.'][is_same]', 1,['class'=>'is-same','data-row-index'=>$i]) }}
                    </td>
                    <td class="counted-readonly" data-row-index="{{$i}}"></td>
                    <td>
                        {{ Form::textarea('opnam['.$i.'][note]', null,['rows'=>2, 'cols'=>20,'class'=>'form-control hidden note','data-row-index'=>$i]) }}
                    </td>
                </tr>
                @endisset
                @endforeach
            </tbody>
        </table>
    </div>
</div>


{{ Form::close() }}

@endsection

@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('input[name="date"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: moment().year(),
            locale: { "format": "DD-MM-YYYY" }
        });

        const columnDefs = {
            columnDefs: [
                {
                    targets: [6, 8],
                    orderable: false
                },
                {
                    targets: [5, 7, 8],
                    visible: false
                }
            ]
        }
        var table = $('#dataTable').DataTable(columnDefs)

        $('#btn-cancel').click(function () {
            table.columns([5, 7, 8]).visible(false)
            table.column(6).visible(true)
            $('#nav-first').removeClass('hidden')
            $('#nav-last').addClass('hidden')
        })

        $('#btn-confirm').click(function (event) {
            table.destroy()
            $('#alert-nan').addClass('hidden')

            var validQuantities = true
            $('input.qty').each(function (index) {
                var qtyParsed = parseInt($(this).val() || "0")

                var rowIndex = $(this).data('rowIndex')

                if (isNaN(qtyParsed)) {
                    validQuantities = false
                    return false
                }
                else {
                    $('td.counted-readonly[data-row-index="' + rowIndex + '"]').text(qtyParsed)

                    var qoh = parseInt($(this).data('qoh'))

                    if (qoh - qtyParsed !== 0) {
                        $('input.is-same[data-row-index="' + rowIndex + '"]').val(0)
                        $('textarea.note[data-row-index="' + rowIndex + '"]').removeClass('hidden').prop('required', true)
                    }
                }
            })
            table = $('#dataTable').DataTable(columnDefs)

            if (!validQuantities) {
                $('#alert-nan').removeClass('hidden')
                event.preventDefault()
            }
            else {
                table.columns([5, 7, 8]).visible(true)
                table.column(6).visible(false)
                $('#nav-first').addClass('hidden')
                $('#nav-last').removeClass('hidden')
            }
        })

        $('#form-stok-opnam').submit(function (event) {
            $('#alert-note-required').addClass('hidden')
            table.destroy()
            $('input.qty').prop('required', false)
            if ($('#form-stok-opnam')[0].checkValidity()) {
                $('input.qty').each(function (index) {
                    if ($(this).val().length === 0) {
                        $(this).val(0)
                    }
                })
            }
            else {
                $('input.qty').prop('required', true)
                table = $('#dataTable').DataTable(columnDefs)
                table.columns([5, 7, 8]).visible(true)
                table.column(6).visible(false)
                $('#alert-note-required').removeClass('hidden')
                event.preventDefault()
            }

        })
    });
</script>
@endpush