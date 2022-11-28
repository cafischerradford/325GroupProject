<!DOCTYPE html>
<html lang="en">
    <x-head title="Grocer | Order History"/>
<body class="bg-gray-200">
    <nav class='flex justify-center bg-white py-3 font-quicksand items-center'>
        <a class="font-baskerville text-5xl" href="/">Grocer</a>
    </nav>

    <div class="flex flex-col w-full">
        @foreach($orders as $order)
        <a href="/order/{{$order->id}}" class="flex font-quicksand my-2 bg-white rounded-md mx-auto container">
            <div class="w-full justify-evenly mx-4 grid gap-4 grid-cols-4">
                <div class="flex justify-between">
                    <p>#{{$order->id}}</p>
                </div>
                <div class="flex justify-between">
                    <p>{{$order->user->email}}</p>
                </div>
                <div class="flex justify-between">
                    <p>${{number_format($order->total / 100, 2, '.', '')}}</p>
                </div>
                <div class="flex justify-between">
                    <p>{{date_format($order->created_at, 'Y-m-d')}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</body>
</html>