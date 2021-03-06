@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
@endpush


@section('content')
            <!-- start tools -->
            <div class="row mb-3">
                  <tool class="navbar navbar-expand-lg">
                  <div class="form-inline my-2 my-lg-0">
                      <div class="input-group srch">
                      <input type="text" class="form-control search-box"id="searchField" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="button">
                              <i class="fa fa-search"></i>
                            </button>
                         </div>
                    </div>
                    @can('add-promo')
                      <a class="btn sub-circle my-2 my-sm-0" href="{{Route('promo.create')}}" role="button">
                        <img class="add-svg" src="{{asset('vendor/admin/images/add.svg')}}" alt="add-image">
                      </a>
                     @endcan
                  </div>
              </tool>
            </div>
            <!-- end tools -->

            <!-- start table -->
            <div class="table-responsive">
              <table class="table" id="promo-table">
              <thead>
                  <tr>
                      <th scope="col">Created Date</th>
                      <th scope="col">Promo Code</th>
                      <th scope="col">Promo Type</th>
                      <th scope="col">Amount(IDR)</th>
                      <th scope="col">Minimum Payment(IDR)</th>
                      <th scope="col">Expired Date</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                
            </table>
            </div>
            <!-- end table -->

 @endsection

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
        $(function() {
          var delay = (function(){
              var timer = 0;
              return function(callback, ms, that){
                clearTimeout (timer);
                timer = setTimeout(callback.bind(that), ms);
              };
            })();
            var list = $('#promo-table').DataTable({
                processing: true,
                serverSide: true,
                "dom": 'lrtip',
                ajax: '{!! route('promo.list') !!}',
                columns: [
                    { data: 'created_at', name: 'created_at' },
                    { data: 'code', name: 'code' },
                    { data: 'type', name: 'type' },
                    { data: 'reward', name: 'reward',className:'text-right' },
                    { data: 'minimum_payment', name: 'minimum_payment',className:'text-right' },
                    { data: 'expires_at', name: 'expires_at' },
                    { data: 'action', name: 'action' }
                ]
            });
             $('#searchField').keyup(function(){
                delay(function(){
                list.search( $('#searchField').val()).draw();
                  }, 1000, this);
              });
        });
      </script>
@endpush