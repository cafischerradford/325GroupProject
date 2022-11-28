<!DOCTYPE html>
<html lang="en">
    <x-head title="Grocer | Order"/>
<body class="bg-gray-200">
    <nav class='flex justify-center bg-white py-3 font-quicksand items-center'>
        <a class="font-baskerville text-5xl" href="/">Grocer</a>
    </nav>

    <div class="flex flex-col w-full">
        @foreach($order->order_items as $orderitem)
        <div class="flex font-quicksand my-2 bg-white rounded-xl mx-auto container">
            <img class="h-36 object-contain rounded-l-xl" src="{{$orderitem->product->image}}"/>
            <div class="w-full flex flex-col justify-evenly mx-2">
                <div class="flex justify-between">
                    <h1>{{$orderitem->product->name}}</h1>
                    <p>${{number_format($orderitem->quantity * $orderitem->product->price / 100, 2, '.', '')}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>