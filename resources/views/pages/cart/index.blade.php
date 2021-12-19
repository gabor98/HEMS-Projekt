@extends('layout.guest')

@section('content')
    <div class="p-4 max-w-5xl mx-auto">
        <h1 class="text-4xl font-bold mb-14">Einkaufswagen</h1>

        <section class="divide-y space-y-4">
            <div class="flex gap-10">
                <div class="h-60 w-60 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/842571/pexels-photo-842571.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)"></div>

                <div class="flex justify-between w-full gap-10">
                    <div class="w-full">
                        <p class="text-lg pb-4 font-semibold text-gray-600">Essen Name</p>

                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.                         </p>
                    </div>

                    <div class="flex flex-col min-h-full bg-gray-100 p-3">
                        <p class="text-2xl flex-grow text-center"><b>20€</b></p>

                        <button type="button" class="text-red-600 font-semibold px-2 py-1 rounded-sm inline-flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>

                            Entfernen
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex gap-10 pt-4">
                <div class="h-60 w-60 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/842571/pexels-photo-842571.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)"></div>

                <div class="flex justify-between w-full gap-10">
                    <div class="w-full">
                        <p class="text-lg pb-4 font-semibold text-gray-600">Essen Name</p>

                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.                         </p>
                        </p>
                    </div>

                    <div class="flex flex-col min-h-full bg-gray-100 p-3">
                        <p class="text-2xl flex-grow text-center"><b>20€</b></p>

                        <button type="button" class="text-red-600 font-semibold px-2 py-1 rounded-sm inline-flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>

                            Entfernen
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-12">
            <div class="flex items-center justify-between text-xl font-bold">
                <p>Gesamtpreis</p>
                <p>20€</p>
            </div>

            <p class="mb-10 pt-2 text-gray-500">MwSt. inklusive</p>

            <button type="button" class="bg-red-500 block w-full p-3 my-6 rounded-sm text-white text-xl hover:bg-red-600 transition-colors ease-linear">
                Bezahlen
            </button>

            <p class="text-center mb-8">oder <a href="#!" class="text-red-500 font-semibold">weiter Einkaufen</a></p>
        <section>
    </div>
@endsection