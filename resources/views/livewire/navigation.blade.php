<!-- Menu de navegacion para Web y Mobiles -->
<div>
    @php
        $nav_links = [
            [
                'name' => 'Nosotros',
                'route' => route('nosotros'),
                'active' => request()->routeIs('nosotros'),
            ],
            [
                'name' => 'Planes',
                'route' => route('planes'),
                'active' => request()->routeIs('planes'),
            ],
            [
                'name' => 'Contacto',
                'route' => route('contacto.mostrarFormulario'),
                'active' => request()->routeIs('contacto.mostrarFormulario'),
            ],
        ];
    @endphp

    <nav class="bg-azul-bonito" x-data="{ open: false }">
        {{-- <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8"> --}}
        <div class="relative flex h-16 items-center justify-between">

            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button x-on:click="open=true" type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
              Icon when menu is closed.
              Menu open: "hidden", Menu closed: "block"
            -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Logotipo -->
            <a href="/">
                {{-- logo para web y tablets --}}
                <img class="pl-10 hidden h-14 w-auto lg:block"
                    src="https://res.cloudinary.com/dbltc2gr7/image/upload/v1694009203/images_guiamath/logo_no_official2_cvndqm.png"
                    alt="Guiamath">
                {{-- logo para mobiles --}}

                <img class="pl-36 h-12 w-auto lg:hidden"
                    src="https://res.cloudinary.com/dbltc2gr7/image/upload/v1694009203/images_guiamath/logo_no_official2_cvndqm.png"
                    alt="Guiamath">

            </a>

            {{-- Buscador de Ejercicios --}}
            <div class="hidden sm:block ml-10 flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <form action="{{ route('search') }}" method="GET" class="flex">
                    <x-input icon="search" type="text" name="search" placeholder="¿Qué quieres aprender?"
                        class="rounded-sm pl-10 px-4 focus:ring-4 focus:ring-azul-electrico" />
                    {{-- <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Buscar</button> --}}
                </form>
            </div>

            <div class="sm:items-stretch sm:justify-start">
                <!-- Web menu button-->
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4 items-center h-full">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        @foreach ($nav_links as $nav_link)
                            <x-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                                {{ $nav_link['name'] }}
                            </x-nav-link>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Profile menu button para web y tablets-->
            <div class="hidden sm:block">
                @auth
                    <div class="absolute inset-y-0 right-0 flex items-center mr-12 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                        <!-- Boton de notificacion -->
                        <button type="button"
                            class="text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3" x-data="{ open: false }">
                            <div>
                                <button x-on:click="open=true" type="button"
                                    class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                        alt="">
                                </button>
                            </div>

                            <div style="display:none" x-show="open" x-on:click.away="open = false"
                                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Mi perfil</a>
                                <a href="{{ route('exerciseuser.index') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Mis ejercicios</a>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-2"
                                        onclick="event.preventDefault();this.closest('form').submit();">
                                        Cerrar sesión</a>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <button class="bg-blue-900 rounded-full px-4 py-2">
                        <a href="{{ route('login') }}"
                            class="text-gray-300 hover:bg-blue-900 hover:text-white rounded-full px-4 py-2 text-sm font-medium">Inicio
                            de sesión</a>
                    </button>
                    <a href="{{ route('register') }}"
                        class="text-gray-300 hover:bg-blue-900 hover:text-white rounded-full px-4 py-2 text-sm font-medium">Registrarse</a>
                @endauth
            </div>

        </div>
        {{-- </div> --}}

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                @foreach ($nav_links as $nav_link)
                    <x-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                        {{ $nav_link['name'] }}
                    </x-nav-link>
                @endforeach
            </div>
        </div>
    </nav>
    <div class="bg-gradient-to-r from-verde-electrico to-verde-limon h-1 w-full"></div>
</div>
