<div className='bg-gray-200'>
    <div className="container mx-auto grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 py-5">
        @foreach($products as $product)
            <x-product-component product={{ $product }}/>
        @endforeach
    </div>
</div>