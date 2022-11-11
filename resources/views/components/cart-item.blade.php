<div class="flex font-quicksand my-2 bg-white rounded-xl">
    <img class="h-36 object-contain rounded-l-xl" src="{{$cartitem->product->image}}"/>
    <div class="w-full flex flex-col justify-evenly mx-2">
        <div class="flex justify-between">
            <h1>{{$cartitem->product->name}}</h1>
            <p>$<span id="price_label_{{$key}}">{{number_format($cartitem->quantity * $cartitem->product->price / 100, 2, '.', '')}}</span></p>
        </div>
        <div class="flex justify-between">
            <div>
                <div class="flex justify-between items-center">
                    <div class="flex">
                        <input type="hidden" id="cart_item_label_{{$key}}" value="{{ $cartitem->id }}">
                        <button @if($cartitem->quantity == 1) disabled @endif onclick="decrementCart({{ $key }}, {{$cartitem->product->price}})" id="decrement_button_{{ $key }}" class="bg-blue-400 text-white px-1.5 rounded text-md disabled:bg-blue-200"><i class="fa-solid fa-minus"></i></button>
                        <input class="w-4 text-center" id="quantity_label_{{ $key }}" name="quantity" type="text" value="{{$cartitem->quantity}}" readonly>
                        <button onclick="incrementCart({{ $key }}, {{$cartitem->product->price}})" id="increment_button_{{ $key }}"class="bg-blue-400 text-white px-1.5 rounded text-md"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <form method="POST" action="/delete_item">
                @csrf
                <input type="hidden" name="product_id" value="{{$cartitem->product_id}}">
                <button type="submit"><i class="fa-solid fa-trash text-red-400"></i></button>
            </form>
        </div>
    </div>
</div>