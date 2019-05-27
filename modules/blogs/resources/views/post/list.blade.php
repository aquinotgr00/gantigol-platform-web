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
                      <a class="btn sub-circle my-2 my-sm-0" href="add-product.html" role="button">
                        <img class="add-svg" src="{{asset('vendor/admin/images/Add.svg')}}" alt="add-image">
                      </a>
                  </form>
              </tool>
            </div>
            <!-- end tools -->
            <!-- start table -->
            <div class="table-responsive">
              <table class="table" id="post-table">
              <thead>
                  <tr>
                      <th scope="col">Title</th>
                      <th scope="col">Category</th>
                      <th scope="col">Date Created</th>
                      <th scope="col">Date Published</th>
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
            $('#post-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('blog.post.list') !!}',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'name', name: 'name' },
                    { data: 'create_date', name: 'create_date' },
                    { data: 'published_date', name: 'published_date' },
                    { data: 'action', name: 'action' }
                ]
            });
        });
      </script>
@endpush