<nav class="relative flex items-center justify-between container mx-auto py-6 border-b max-w-7xl" x-data="{ menuDropdown: false }">
    <div class="flex items-center">
        {{-- Logo --}}
        <a href="{{ route('index') }}">
            <img src="{{ asset('logo.png') }}" alt="HEMS" class="w-24">
        </a>

        {{-- Menu --}}
        <ul class="flex gap-4 ml-8">
            <li class="text-lg text-gray-500 hover:text-gray-700 transition-colors ease-linear cursor-pointer" @click="menuDropdown = !menuDropdown">
                Menüs
            </li>
            <li class="text-lg text-gray-500 hover:text-gray-700 transition-colors ease-linear">
                <a href="#!">Aktionen</a>
            </li>
        </ul>
    </div>

    {{-- Cart --}}
    @if (!empty(Session::get('cart')))
        <a href="{{ route('cart.index') }}" class="flex items-center gap-3 text-gray-500 hover:bg-gray-100 hover:text-gray-600 p-2 rounded-md transition-colors ease-linear group">
            <svg class="h-6 w-6 text-gray-400 group-hover:text-gray-600 transition-colors ease-linear" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>

            <span class="font-semibold">{{ count(Session::get('cart')) }}</span>
        </a>
    @endif

    <div class="flex gap-28 bg-white px-10 py-10 absolute top-28 left-0 z-10 w-full shadow-2xl border-t" style="display: none" x-show="menuDropdown" x-transition @click.away="menuDropdown = false">
        <div>
            <p class="font-semibold mb-4 text-gray-600 tracking-wide">Kategorien</p>

            <ul class="space-y-2">
                <li>
                    <a href="{{ route('shop.menus') }}" class="block text-gray-500 transform hover:text-gray-700 hover:translate-x-1 transition-all ease-linear">
                        Tages Menu
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop.menus') }}" class="block text-gray-500 transform hover:text-gray-700 hover:translate-x-1 transition-all ease-linear">
                        Gesundes Essen
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop.menus') }}" class="block text-gray-500 transform hover:text-gray-700 hover:translate-x-1 transition-all ease-linear">
                        Snacks
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop.menus') }}" class="block text-gray-500 transform hover:text-gray-700 hover:translate-x-1 transition-all ease-linear">
                        Desert
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop.menus') }}" class="block text-gray-500 transform hover:text-gray-700 hover:translate-x-1 transition-all ease-linear">
                        Mittagessen
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <p class="font-semibold mb-4">Getränke</p>

            <ul class="space-y-2">
                <li>
                    <a href="{{ route('shop.drinks') }}" class="block text-gray-500 transform hover:text-gray-700 hover:translate-x-1 transition-all ease-linear">
                        Softgetränke
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop.drinks') }}" class="block text-gray-500 transform hover:text-gray-700 hover:translate-x-1 transition-all ease-linear">
                        Fruchtgetränke
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop.drinks') }}" class="block text-gray-500 transform hover:text-gray-700 hover:translate-x-1 transition-all ease-linear">
                        Aufgussgetränke
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>