<div class='flex flex-col rounded-xl bg-white hover:-translate-y-3 ease-in duration-200'>
    <img class='object-contain rounded-t-xl' src="{{$product->image}}"/>
    {{-- INFO SECTION --}}
    <div class='px-3 py-2 flex flex-col basis-5/12 justify-between'>
        {{-- PRODUCT INFO --}}
        <div class='flex justify-between'>
            <p>{{$product->product_name}}</p>
            <p>${{$product->price / 100}}</p>
        </div>
        <p>{{$product->unit_label}}</p>
    </div>
  </div>