@extends('layout.guest')

@section('content')
    <div class="p-4" x-data="{ filter: [] }">
        <div class="mb-10 border-b pb-6">
            <h1 class="text-3xl font-bold leading-loose">Getränke</h1>
            <h3 class="text-lg text-gray-400">Lorem Ipsum</h3>
        </div>

        <section class="grid grid-cols-10 gap-4">
            {{-- Sidebar --}}
            @isset($categories)
                <div class="col-span-2 bg-gray-100 p-4 relative">
                    <div class="sticky top-10">
                        <p class="font-semibold tracking-wide mb-4 bg-gray-200 rounded-md p-3 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>

                            Filtern
                        </p>

                        @foreach($categories as $category)
                            <div>
                                <label>
                                    <input type="checkbox" value="{{ $category }}" @click="if (filter.includes($el.value)) { filter.splice(filter.indexOf($el.value), 1)  } else { filter.push($el.value) }">
                                    <span>{{ $category }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endisset

            {{-- Content --}}
            <div @class([
                'col-span-8'    => (isset($categories)),
                'col-span-full' => (empty($categories)),
                'grid grid-cols-3 gap-10'
            ])>
                @foreach($products as $product)
                    <div 
                        class="border"
                        x-show="filter.length === 0 || filter.includes('softdrink')"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                    >
                        <img src="{{ $product->image }}">

                        <div class="p-4">
                            <p class="font-semibold pb-2 text-lg">{{ $product->name }}</p>
                            <p class="font-bold mb-4">{{ $product->price }} €</p>

                            @if (Session::has('cart') && in_array($product, Session::get('cart')))
                                {{-- Exists already in the shopping cart --}}
                                <button type="button" disabled class="p-2 bg-gray-100 rounded-md transition-colors ease-linear flex items-center gap-3 justify-center w-full cursor-default text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>

                                    In den Warenkorb
                                </button>
                            @else
                                <form action="{{ route('shop.addCart') }}" method="post">
                                    @csrf
                                    @method('post')

                                    <input type="hidden" name="type" value="{{ $type }}">
                                    <input type="hidden" name="product" value="{{ $product->id }}">

                                    <button type="submit" class="p-2 bg-gray-100 hover:bg-gray-200 rounded-md transition-colors ease-linear flex items-center gap-3 justify-center w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>

                                        In den Warenkorb
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection