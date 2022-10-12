<div class='bg-gray-200'>
    <div class="font-quicksand container mx-auto grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-4 gap-y-8 py-5">
        @foreach($products as $product)
            <x-product-component :product="$product"/>
        @endforeach
    </div>
</div>