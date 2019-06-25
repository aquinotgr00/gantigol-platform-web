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
            font-size: 10px;
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
            width: 25%;
            padding: 10px;
            height: 150px;
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
            <h3>{{ ucwords($value->getTransaction->name) }}</h3>
            <p>{{ $value->getTransaction->address }}</p>
            
            @if(isset($value->getTransaction->getProduction->tracking_number))
            <b>Kurir</b> <p>{{ strtoupper($value->getTransaction->courier_name) }}</p>
            <b>No. Resi:</b><p>{{ $value->getTransaction->getProduction->tracking_number }}</p>
            @endif

        </div>
        @endforeach
    </div>
    @endif 
</body>

</html>