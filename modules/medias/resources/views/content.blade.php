    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <!-- Styles -->
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }

                .full-height {
                    height: 100vh;
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                   <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        {{ session('status') }}
    </div>

                <div class="content">
                   <h1>{{ ucfirst($model) }} media</h1>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">All media files</h3>
        </div>

        @if($media->isEmpty())
            <div class="panel-body">
                No media added yet.
            </div>
        @endif

        <div class="list-group">
            @foreach($media as $file)
                <div class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            @if(starts_with($file->mime_type, 'image'))
                                <a href="{{ $file->getUrl() }}" target="_blank">
                                    <img class="media-object" src="{{ $file->getUrl() }}" alt="{{ $file->name }}">
                                </a>
                            @else
                                <span class="glyphicon glyphicon-file large-icon"></span>
                            @endif
                        </div>
                        <div class="media-body">
                            <div class="btn-group pull-right">
                                <a href="{{ route("{$model}.content.destroy", $file->id) }}"
                                   data-method="delete"
                                   data-token="{{ csrf_token() }}"
                                   class="close">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </div>
                            <h4 class="media-heading">{{ $file->name }}</h4>
                            <p>
                                <code>
                                    {{ $file->getPath() }}<br/>
                                </code>
                                <small>
                                    {{ $file->human_readable_size }} |
                                    {{ $file->mime_type }}
                                </small>
                            </p>

                            @foreach($file->getMediaConversionNames() as $conversion)
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{ $file->getUrl($conversion) }}" target="_blank">
                                            <img class="media-object media-object-small"
                                                 src="{{ $file->getUrl($conversion) }}" alt="{{ $conversion }}">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="media-heading">{{ $conversion }}</h4>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="panel-footer">
            <a href="{{ route("{$model}.media.destroy_all") }}"
               class="btn btn-sm btn-danger"
               data-method="delete"
               data-confirm="Are you sure you wish to delete all media?"
               data-token="{{ csrf_token() }}">
                Delete all
            </a>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Upload media files</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route("{$model}.content.store") }}"
                  class="dropzone"
                  id="media-dropzone">

                {{ csrf_field() }}

            </form>
        </div>
    </div>
                </div>
            </div>

<script src="{{ asset('js/app.js') }}"></script>
        </body>
    </html>
