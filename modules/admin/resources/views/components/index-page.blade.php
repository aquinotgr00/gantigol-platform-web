@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

{{-- start header --}}
@pageHeader(['title'=>$title])
{{-- end header --}}

{{-- start tools --}}
<div>
    <tool class="navbar navbar-expand-lg">
        <form class="form-inline my-2 my-lg-0">
            @searchbar()
            @addNewButton(['action'=>$addNewAction])
        </form>
    </tool>
</div>
{{-- end tools --}}

{{-- start pagination --}}
<div>
    {{-- pagination --}}
</div>
{{-- end pagination --}}

{{-- start table --}}
<div class="table-responsive">
    {{ $slot }}
</div>
{{-- end table --}}

{{-- start pagination --}}
<br>
<hr>
<div>
    {{-- pagination --}}
</div>
{{-- end pagination --}}

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush