@extends('admin::layout-nassau')

@section('content')
<div class="row">
    <div class="col-8">
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
                    <a class="btn sub-circle my-2 my-sm-0" href="{{ route('stockopname.create') }}" role="button">
                        <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
                    </a>
                </form>
            </tool>
        </div>
        <!-- end tools -->
        <hr>
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                @php
                $message = Session::get('successMessage');
                $alertType = 'success';
                if(Session::get('errorMessage')) {
                $message = Session::get('errorMessage');
                $alertType = 'danger';
                }
                @endphp

                @if ($message)
                <div class="alert alert-{{$alertType}} alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <div class="row">

                    <table class="table table-bordered" id="dataTable" role="grid" aria-describedby="dataTable_info"
                        style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th class="col-md-1 col-sm-1">Date</th>
                                <th class="col-md-1 col-sm-1">Admin name</th>
                                <th class="col-md-2 col-sm-2"></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($stockOpname as $row)
                            <tr>
                                <td>{{ $row->date->format('d M Y') }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td>
                                    <a href="{{ route('stockopname.edit', ['stockopname' => $row->id]) }}"
                                        class="btn btn-default btn-circle" role="button" title="View"><i
                                            class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection