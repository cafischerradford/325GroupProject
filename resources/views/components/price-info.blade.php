<div class="flex flex-col basis-3/4 h-min top-5 sticky bg-white rounded-xl mt-2 ml-2">
    <div class="m-4 flex flex-col justify-center font-quicksand">
        <div class="flex justify-between text-gray-500">
            <p>Subtotal</p>
            <p>$<span id="subtotal">{{number_format($subtotal / 100, 2, '.', '')}}<span></p>
        </div>
        <div class="flex justify-between text-gray-400">
            <p>Tax</p>
            <p>$<span id="tax">{{number_format(floor($subtotal * 0.085) / 100, 2, '.', '')}}<span></p>
        </div>
        <hr>
        <div class="flex justify-between">
            <p>Total</p>
            <p>$<span id="total">{{number_format($total / 100, 2, '.', '')}}<span></p>
        </div>
        <form class="mt-3" action="/checkout" method="POST">
            @csrf
            <input type="hidden" name="items[]" value="{{$cartitems}}">
            <input type="hidden" name="customer_id" value="{{auth()->user()->customer_id}}">
            <input class="cursor-pointer bg-blue-500 text-white py-2 rounded-md w-full" type="submit" value="Pay">    
        </form>
        <a class="py-2 text-center bg-white border-black border rounded-md mt-3" href="/">Continue Shopping</a>
    </div>
</div>