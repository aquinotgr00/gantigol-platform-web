@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
@endpush


@section('content')
            <!-- start tools -->
            <div class="row mb-3">
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
                     @can('add-category-post')
                      <a class="btn sub-circle my-2 my-sm-0" href="{{Route('blog.category.new')}}" role="button">
                        <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
                      </a>
                    @endcan
                  </form>
              </tool>
            </div>
            <!-- end tools -->

            <!-- start table -->
            <div class="table-responsive">
              <table class="table" id="category-table">
              <thead>
                  <tr>
                      <th scope="col">Category Name</th>
                      <th scope="col">Total Post</th>
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
            $('#category-table').DataTable({
                processing: true,
                serverSide: true,
                "dom": 'lrtip',
                ajax: '{!! route('blog.category.list') !!}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'count', name: 'count' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
      </script>
@endpush