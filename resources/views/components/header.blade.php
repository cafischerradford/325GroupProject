<nav class="bg-white">
    <div class="flex justify-between container mx-auto py-3 font-quicksand items-center">
        <a class="font-baskerville text-5xl" href="/">Grocer</a>
        <ul class="flex basis-1/2 justify-between items-center">
            <li>
                <div class="justify-between">
                    <a href="/fruits_vegetables">Fruits & Veg</a>
                    <div @if($active == 'fruits_vegetables') class="h-0.5 bg-blue-400"@endif></div>
                </div>
            </li>
            <li>
                <div class="justify-between">
                    <a href="/meats">Meats</a>
                    <div @if($active == 'meats') class="h-0.5 bg-blue-400"@endif></div>
                </div>
            </li>
            <li>
                <div class="justify-between">
                    <a href="/dairy">Dairy</a>
                    <div @if($active == 'dairy') class="h-0.5 bg-blue-400"@endif></div>
                </div>
            </li>
            <li>
                <div class="justify-between">
                    <a href="/snacks">Snacks</a>
                    <div @if($active == 'snacks') class="h-0.5 bg-blue-400"@endif></div>
                </div>
            </li>
            <li>
                <div class="justify-between">
                    <a href="/drinks">Drinks</a>
                    <div @if($active == 'drinks') class="h-0.5 bg-blue-400"@endif></div>
                </div>
            </li>
        </ul>
        @auth
            <div class="relative">
                <a class="text-3xl" href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                @if($count != 0)
                    <span class="absolute text-sm -right-3 -top-2 bg-blue-400 text-white px-2 py-0.5 rounded-full">{{ $count }}</span>
                @endif
            </div>
        @endauth
        @guest
            <a  href="/login">Login</a>
        @endguest
    </div>
  </nav>