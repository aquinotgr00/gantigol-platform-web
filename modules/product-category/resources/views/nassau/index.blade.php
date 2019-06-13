@extends('admin::layout-nassau')

@section('content')
@indexPage(['title'=>'Product Categories','addNewAction'=>route('product-categories.create')])
@table
    @slot('headerColumns')
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Parent Categories » Category</th>
            <th scope="col">Action</th>
        </tr>
    @endslot
    @foreach([] as $category)
    
    @endforeach
@endtable
@endindexPage
@endsection
