<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping Sticker</title>
    <style>
        body {
            font-family: Avenir, sans-serif;
        }
        
        * {
            box-sizing: border-box;
            margin:0;
            padding:5px;
            width: 100%;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: {{ (isset($setting->width))? $setting->width.'%'  : '10%' }};
            padding: 10px;
            height: {{ (isset($setting->height))? $setting->height.'px'  : '100px' }};
            border: 3px solid #333;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    @if(isset($production)) 
    <div class="row">
        @foreach($production as $key => $value)
        <div class="column" >
            <h2>{{ $value->getTransaction->name }}</h2>
            <p>{{ $value->getTransaction->address }}</p>
        </div>
        @endforeach
    </div>
    @endif 
</body>

</html>