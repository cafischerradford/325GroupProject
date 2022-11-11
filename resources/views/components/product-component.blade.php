<div class='flex flex-col rounded-xl bg-white hover:-translate-y-3 ease-in duration-200'>
    <img class='object-contain rounded-t-xl' src="{{$product->image}}"/>
    {{-- INFO SECTION --}}
    <div class='px-3 py-2 flex flex-col basis-5/12 justify-between'>
        {{-- PRODUCT INFO --}}
        <div class='flex justify-between'>
            <p>{{$product->name}}</p>
            <p>${{$product->price / 100}}</p>
        </div>
        <p>{{$product->unit_label}}</p>
        <form action="/add_to_cart" method="POST">
            <div class="flex justify-between items-center">
                <div class="flex">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button disabled onclick="decrementQuantity(event, {{ $key }})" id="decrement_button_{{ $key }}" class="bg-blue-400 text-white px-1.5 rounded text-md disabled:bg-blue-200"><i class="fa-solid fa-minus"></i></button>
                    <input class="w-4 text-center" id="quantity_label_{{ $key }}" name="quantity" type="text" value="1">
                    <button onclick="incrementQuantity(event, {{ $key }})" id="increment_button_{{ $key }}"class="bg-blue-400 text-white px-1.5 rounded text-md"><i class="fa-solid fa-plus"></i></button>
                </div>
                <input type="submit" class="cursor-pointer bg-blue-400 text-white p-1.5 rounded" value="Add to Cart"/>
            </div>
        </form>
    </div>
  </div>