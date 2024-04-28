<nav class="bg-blue1 py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <h1 class="text-white text-sm">Whatsapp:061 486 5651 | Email:info@satechi.co.zw | Tirelo ICT Park Mabulela Atok</h1>
            <div class="flex space-x-1">
                @if (Auth::check())
                    <a href="{{ route('logout') }}">
                        <button class="text-white text-sm">LOGOUT</button>
                    </a>
                @else
                    <a href="{{ route('login') }}">
                        <button class="text-white text-sm">LOGIN</button>
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>
