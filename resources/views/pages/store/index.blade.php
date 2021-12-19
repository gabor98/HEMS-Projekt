@extends('layout.guest')

@section('content')
    <div class="p-4">
        {{-- Menu Grid --}}
        <section>
            <h1 class="text-3xl font-bold mb-4">Menu Kategorien</h1>

            <div class="grid grid-cols-2 gap-5">
                <div class="relative">
                    <div class="absolute top-0 left-0 h-full w-full bg-gradient-to-t from-gray-600 rounded-md"></div>

                    <div class="rounded-md h-full w-full bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/2097090/pexels-photo-2097090.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                    </div>
                    
                    <div class="absolute left-0 bottom-0 w-full p-8 text-white">
                        <h3 class="text-xl font-thin tracking-wider">Tages Menu</h3>

                        <a href="#!" class="mt-2 flex items-center gap-2 text-gray-300 hover:text-white transition-colors ease-linear group">
                            Zum Menu

                            <svg class="h-6 w-6 group-hover:translate-x-2 transform transition-transform ease-linear" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="relative mb-5">
                        <div class="absolute top-0 left-0 h-full w-full bg-gradient-to-t from-gray-600 rounded-md"></div>

                        <div class="h-96 w-full bg-cover bg-center rounded-md grow" style="background-image: url(https://images.pexels.com/photos/196643/pexels-photo-196643.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                        </div>

                        <div class="absolute left-0 bottom-0 w-full p-8 text-white">
                            <h3 class="text-xl font-thin tracking-wider">Gesundes Essen</h3>
                            <a href="#!" class="mt-2 flex items-center gap-2 text-gray-300 hover:text-white transition-colors ease-linear group">
                                Zum Menu

                                <svg class="h-6 w-6 group-hover:translate-x-2 transform transition-transform ease-linear" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <div class="absolute top-0 left-0 h-full w-full bg-gradient-to-t from-gray-600 rounded-md"></div>

                        <div class="h-96 w-full bg-no-repeat bg-cover bg-center rounded-md" style="background-image: url(https://images.pexels.com/photos/3338681/pexels-photo-3338681.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                        </div>

                        <div class="absolute left-0 bottom-0 w-full p-8 text-white">
                            <h3 class="text-xl font-thin tracking-wider">Desert</h3>
                            <a href="#!" class="mt-2 flex items-center gap-2 text-gray-300 hover:text-white transition-colors ease-linear group">
                                Zum Menu

                                <svg class="h-6 w-6 group-hover:translate-x-2 transform transition-transform ease-linear" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Features --}}
        <section class="bg-gray-50 my-36">
            <div class="relative">
                <div class="h-96 w-full bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3471029/pexels-photo-3471029.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)"></div>
                <div class="absolute top-0 left-0 h-full w-full bg-gradient-to-t from-gray-600"></div>
            </div>

            <div class="grid grid-cols-3 gap-10 -mt-28 relative px-10">
                <div class="bg-white rounded-md">
                    <svg class="h-12 w-12 bg-red-50 p-2 text-red-500 rounded-md mx-auto my-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>

                    <h3 class="text-lg font-semibold text-center pb-3">Schnelle & Einfache Zahlung</h3>

                    <p class="text-center px-4 text-slate-500 text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>

                <div class="bg-white rounded-md">
                    <svg class="h-12 w-12 bg-red-50 p-2 text-red-500 rounded-md mx-auto my-6" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M1 22C1 22.54 1.45 23 2 23H15C15.56 23 16 22.54 16 22V21H1V22M8.5 9C4.75 9 1 11 1 15H16C16 11 12.25 9 8.5 9M3.62 13C4.73 11.45 7.09 11 8.5 11S12.27 11.45 13.38 13H3.62M1 17H16V19H1V17M18 5V1H16V5H11L11.23 7H20.79L19.39 21H18V23H19.72C20.56 23 21.25 22.35 21.35 21.53L23 5H18Z" />
                    </svg>

                    <h3 class="text-lg font-semibold text-center pb-3">Täglich neue Menus</h3>

                    <p class="text-center px-4 text-slate-500 text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>

                <div class="bg-white rounded-md">
                    <svg class="h-12 w-12 bg-red-50 p-2 text-red-500 rounded-md mx-auto my-6" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M16 1.2C15 1.2 14.2 2 14.2 3S15 4.8 16 4.8 17.8 4 17.8 3 17 1.2 16 1.2M12.4 4.1C11.93 4.1 11.5 4.29 11.2 4.6L7.5 8.29C7.19 8.6 7 9 7 9.5C7 10.13 7.33 10.66 7.85 10.97L11.2 13V18H13V11.5L10.75 9.85L13.07 7.5L14.8 10H19V8.2H15.8L13.86 4.93C13.57 4.43 13 4.1 12.4 4.1M10 3H3C2.45 3 2 2.55 2 2S2.45 1 3 1H12.79C12.58 1.34 12.41 1.71 12.32 2.11C11.46 2.13 10.65 2.45 10 3M5 12C2.24 12 0 14.24 0 17S2.24 22 5 22 10 19.76 10 17 7.76 12 5 12M5 20.5C3.07 20.5 1.5 18.93 1.5 17S3.07 13.5 5 13.5 8.5 15.07 8.5 17 6.93 20.5 5 20.5M19 12C16.24 12 14 14.24 14 17S16.24 22 19 22 24 19.76 24 17 21.76 12 19 12M19 20.5C17.07 20.5 15.5 18.93 15.5 17S17.07 13.5 19 13.5 22.5 15.07 22.5 17 20.93 20.5 19 20.5M5.32 11H1C.448 11 0 10.55 0 10S.448 9 1 9H5.05C5.03 9.16 5 9.33 5 9.5C5 10.03 5.12 10.54 5.32 11M6 7H2C1.45 7 1 6.55 1 6S1.45 5 2 5H7.97L6.09 6.87C6.05 6.91 6 6.96 6 7Z" />
                    </svg>
                
                    <h3 class="text-lg font-semibold text-center pb-3">Schnelle Lieferung</h3>

                    <p class="text-center px-4 text-slate-500 text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection