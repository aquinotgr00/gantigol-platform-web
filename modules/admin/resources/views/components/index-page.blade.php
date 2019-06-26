@useDatatables

{{-- start header --}}
@pageHeader(['title'=>$title])
{{-- end header --}}

{{-- start tools --}}
<div class="row mb-3">
    <div class="col-md-3">
        <tool class="navbar navbar-expand-lg">
            <form class="form-inline my-2 my-lg-0">
                @searchbar()
                @isset($addNewAction)
                    @if(isset($addNewPrivilege))
                        @can($addNewPrivilege)
                            @addNewButton(['action'=>$addNewAction])
                        @endcan
                    @else
                        @addNewButton(['action'=>$addNewAction])
                    @endif
                    
                @endisset
            </form>
        </tool>
    </div>
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
<div>
    {{-- pagination --}}
</div>
{{-- end pagination --}}