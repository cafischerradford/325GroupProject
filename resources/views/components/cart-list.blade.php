<div class="flex flex-col w-full">
    @foreach($cartitems as $key => $cartitem)
        <x-cart-item :cartitem="$cartitem" :key="$key"/>
    @endforeach
</div>