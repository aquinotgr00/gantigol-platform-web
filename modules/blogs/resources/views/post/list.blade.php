@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush


@section('content')
             <!-- start tools -->
            <div>
                  <tool class="navbar navbar-expand-lg">
                  <div class="form-inline my-2 my-lg-0">
                      <div class="input-group srch">
                      <input type="text" class="form-control search-box" id="searchField" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="button">
                              <i class="fa fa-search"></i>
                            </button>
                         </div>
                         <select class="form-control search-box" id="searchCategory">
                            <option value="">All</option>
                            @foreach($category as $i=>$row)
                            <option value="{{$row->name}}">{{$row->name}}</option>
                            @endforeach
                          </select>
                    </div>
                      <a class="btn sub-circle my-2 my-sm-0" href="{{ Route('blog.post.create')}}" role="button">
                        <img class="add-svg" src="{{asset('vendor/admin/images/add.svg')}}" alt="add-image">
                      </a>
                  </div>
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
                      <th scope="col">Highlight</th>
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
            var list = $('#post-table').DataTable({
                processing: true,
                serverSide: true,
                "dom": 'lrtip',
                "ordering": false,
                ajax: {
                'url':'{!! route('blog.post.list') !!}'                },
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'name', name: 'name' },
                    { data: 'create_date', name: 'create_date' },
                    { data: 'published_date', name: 'published_date' },
                    { data: 'highlight', name: 'highlight' },
                    { data: 'action', name: 'action' },
                ]
            });

            $('#searchField').keyup(function(){
                delay(function(){
                list.search( $('#searchField').val()).draw();
                  }, 1000, this);
              });
             $('#searchCategory').change(function(){
                list.column(1).search($('#searchCategory').val()).draw();
              });
        });

         
      </script>
@endpush