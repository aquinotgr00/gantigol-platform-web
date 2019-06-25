@extends('admin::layout-nassau')

@section('content')

@indexPage(['title'=>'Inventory Adjustments', 'addNewAction'=>route('adjustment.create')])

@if ($message = Session::get('successMessage'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('errorMessage'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<table class="table" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
    <thead>
        <tr role="row">
            <th class="col-sm-3">Product Name</th>
            <th class="col-sm-2">Method</th>
            <th class="col-sm-1">Stock</th>
            <th class="col-sm-1">Users</th>
            <th class="col-sm-3">Note</th>
            <th class="col-sm-2">Date</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($getAdjusment as $i => $row)
        <tr>
            <td>{{ $row->productVariant->product->name }} - {{ $row->productVariant->variant }} -
                {{ $row->productVariant->sku }}</td>
            <td>{{ array_keys(config('inventory.adjustment.type','inventory'))[$row->type] }}</td>
            <td>{{ $row->method.' '.$row->qty }}</td>
            <td>{{ (is_null($row->users))? '' : $row->users->name }}</td>
            <td>{{ $row->note }}</td>
            <td>{{ date("d/m/Y H.i A", strtotime($row->created_at)) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endindexPage
@endsection

@push('scripts')
<script>
    $(function() {

        var datatables = $('#dataTable').DataTable();

        $('#dataTable_filter').css('display', 'none');

        $('.search-box').on('keyup', function() {

            datatables.search(this.value).draw();
        });

    });
</script>
@endpush