<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: rgb(229 231 235);
        }

        nav {
            background-color: white;
            font-size: 3rem;
            line-height: 1;
            display: flex;
            justify-content: center;
        }

        * {
            margin: 0;
            padding:0;
        }

        .list {
            display: flex;
            flex-direction: column;
            width: 100%
        }
        
        .row {
            display: flex;
            font-family: 'Quicksand', sans-serif;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            background-color: white;
            border-radius: 0.75rem;
            align-items: center;
            margin-right: 2rem;
            margin-left: 2rem;
        }

        .image {
            height: 9rem;
            object-fit: contain;
            border-top-left-radius: 0.75rem;
            border-bottom-left-radius: 0.75rem;
        }

        .info {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }


    </style>
</head>
<body>
    <nav class="">
        <p>Grocer</p>
    </nav>

    <div class="list">
        @foreach($order->order_items as $orderitem)
        <div class="row">
            <img class="image" src="{{$orderitem->product->image}}"/>
            <div class="info">
                <h1>{{$orderitem->product->name}}</h1>
                <p>${{number_format($orderitem->quantity * $orderitem->product->price / 100, 2, '.', '')}}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>