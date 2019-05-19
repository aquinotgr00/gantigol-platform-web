@extends('admin::layout')

@section('content')

@include('medias::media-gallery-and-uploader',['isModal'=>false, 'onMediaClick'=>'showCategory', 'onSuccessfulUpload'=>'tes'])

@endsection
