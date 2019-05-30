@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush


@section('content')
            <!-- start tools -->
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
                      <a class="btn sub-circle my-2 my-sm-0" href="{{Route('promo.create')}}" role="button">
                        <img class="add-svg" src="{{asset('vendor/admin/images/Add.svg')}}" alt="add-image">
                      </a>
                  </form>
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
                      <th scope="col">Promo type</th>
                      <th scope="col">Expired Date</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                
            </table>
            </div>
            <!-- end table -->

 @endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
        $(function() {
            $('#promo-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('promo.list') !!}',
                columns: [
                    { data: 'created_at', name: 'created_at' },
                    { data: 'code', name: 'code' },
                    { data: 'type', name: 'type' },
                    { data: 'expires_at', name: 'expires_at' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
      </script>
@endpush