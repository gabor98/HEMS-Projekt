@extends('layout.guest')

@section('content')
    <div class="p-4">
        <div class="mb-10 border-b pb-6">
            <h1 class="text-3xl font-bold leading-loose">Getränke</h1>
            <h3 class="text-lg text-gray-400">Lorem Ipsum</h3>
        </div>

        <section class="grid grid-cols-6 gap-4">
            {{-- Sidebar --}}
            <div class="col-span-2 bg-gray-100 p-4 relative">
                <div class="sticky top-10">
                    <p class="font-semibold tracking-wide mb-4 bg-gray-200 rounded-md p-3 flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>

                        Filtern
                    </p>

                    <div>
                        <label>
                            <input type="checkbox" class="appearance-none indeterminate:bg-gray-300">
                            <span>Softgetränke</span>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox">
                            <span>Fruchtgetränke</span>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox">
                            <span>Aufgussgetränke</span>
                        </label>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="col-span-4 grid grid-cols-3 gap-10">
                <div class="border">
                    <img src="https://images.pexels.com/photos/7429792/pexels-photo-7429792.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">

                    <div class="p-4">
                        <p class="font-semibold pb-4 text-xl text-center">Cola</p>
                        <p class="bg-gray-200 p-3 rounded-md font-bold flex items-center justify-between">
                            <span class="text-xl">3€</span>

                            <a href="#!" class="p-2 hover:bg-gray-300 rounded-md transition-colors ease-linear">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="border">
                    <img src="https://images.pexels.com/photos/7429792/pexels-photo-7429792.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">

                    <div class="p-4">
                        <p class="font-semibold pb-4 text-xl text-center">Cola</p>
                        <p class="bg-gray-200 p-3 rounded-md font-bold flex items-center justify-between">
                            <span class="text-xl">3€</span>

                            <a href="#!" class="p-2 hover:bg-gray-300 rounded-md transition-colors ease-linear">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection