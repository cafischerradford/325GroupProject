<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Cart"/>
<body class="bg-gray-200">
    <nav class='flex justify-center bg-white py-3 font-quicksand items-center'>
        <a class="font-baskerville text-5xl" href="/">Grocer</a>
    </nav>

    <div class="bg-gray-200">
        <div class="flex container mx-auto">
            <x-cart-list :cartitems="$cartitems"/>
            <x-price-info :subtotal="$subtotal" :total="$total" :cartitems="$cartitems"/>
        </div>
    </div>
</body>
</html>