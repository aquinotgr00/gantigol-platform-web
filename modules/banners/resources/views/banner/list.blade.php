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
                      <a class="btn sub-circle my-2 my-sm-0" href="{{Route('banner.create')}}" role="button">
                        <img class="add-svg" src="{{asset('vendor/admin/images/add.svg')}}" alt="add-image">
                      </a>
                  </div>
              </tool>
            </div>
            <!-- end tools -->

            <!-- start table -->
            <div class="table-responsive">
              <table class="table" id="banner-table">
              <thead>
                  <tr>
                      <th scope="col">Banner Title</th>
                      <th scope="col">Placement Name</th>
                      <th scope="col">Sequence</th>
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
          var delay = (function(){
              var timer = 0;
              return function(callback, ms, that){
                clearTimeout (timer);
                timer = setTimeout(callback.bind(that), ms);
              };
            })();
            var list = $('#banner-table').DataTable({
                processing: true,
                serverSide: true,
                "dom": 'lrtip',
                "ordering": false,
                ajax: '{!! route('banner.list') !!}',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'placement_name', name: 'placement_name' },
                    { data: 'sequence',name:'sequence'},
                    { data: 'action', name: 'action' }
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