@extends('admin::layout-nassau')
@push('styles')
<style>
    span[data-toggle=tooltip] {
        display:inline-block;
        
    }
</style>
@endpush
@section('content')
@indexPage(['title'=>'Products', 'addNewAction'=>route('product.create')])
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
@endindexPage

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

    $(document).ready(function() {
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
            order: [[ 0, "desc" ]],
            columnDefs : [{
                "targets": [0],
                "visible": false,
                "searchable": false
            }],
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip()
            }
        });

        $('#ModalAdjusment').on('shown.bs.modal', function(e) {
            var button = e.relatedTarget;
            var id = $(button).data('id');
            $('input[name="product_variants_id"]').val(id);

        });

        $('#form-add-adjustment').submit(function(event) {
            event.preventDefault();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                success: function(data) {

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

        $('.search-box').on('keyup', function() {

            datatables.search(this.value).draw();
        });
    });
</script>
@endpush