<!-- Barra superior con información de contacto -->
<nav class="w-full px-2 py-1 fixed top-0 text-dark z-50 bg-[#01E4FF]" id="login-nav">
    <div class="flex justify-between w-full">
    <div>
            <span class="mr-2"><i class="fa fa-phone mr-1"></i> {{ $systemInfo->getValue('contact') }}</span>
        </div>
        <div>
            <span class="mr-2"><i class="fa fa-envelope mr-1"></i> {{ $systemInfo->getValue('email') }}</span>
        </div>
    </div>
</nav>

<!-- Menú principal -->
<nav class="w-full navbar fixed mt-8 z-40 bg-[#01E4FF] text-dark" id="top-Nav">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <!-- Nombre del sitio -->
            <div class="flex items-center">
                <a class="hidden sm:block" href="{{ route('home') }}">
                    <span class="text-dark font-medium">{{ config('settings.short_name') }}</span>
                </a>
                <a class="block sm:hidden" href="{{ route('home') }}">
                    <span class="text-dark font-medium">{{ config('settings.short_name') }}</span>
                </a>
            </div>

            <!-- Botón de menú móvil -->
            <button class="lg:hidden focus:outline-none" type="button" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <div class="hidden lg:flex items-center space-x-4" id="navbar-links">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} text-dark hover:text-gray-800">INICIO</a>
                <a href="{{ route('check-status') }}" class="nav-link {{ request()->routeIs('check-status') ? 'active' : '' }} text-dark hover:text-gray-800">COMPROBAR ESTADO</a>
                <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }} text-dark hover:text-gray-800">NUESTROS SERVICIOS</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} text-dark hover:text-gray-800">SOBRE NOSOTROS</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} text-dark hover:text-gray-800">CONTÁCTENOS</a>
                
                @auth
                    <div class="flex items-center ml-4">
                        <span class="mx-2">
                            <img src="{{ asset(auth()->user()->avatar) }}" alt="Avatar de usuario" class="w-8 h-8 rounded-full">
                        </span>
                        <span class="mx-2">Hola, {{ auth()->user()->username ?: auth()->user()->email }}</span>
                        <a href="{{ route('logout') }}" class="ml-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="nav-link text-dark hover:text-gray-800">LOGIN</a>
                @endauth
            </div>
        </div>

        <!-- Menú móvil -->
        <div class="lg:hidden hidden w-full mt-2" id="mobile-menu">
            <div class="flex flex-col space-y-2 pb-3">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} text-dark hover:text-gray-800 py-2">INICIO</a>
                <a href="{{ route('check-status') }}" class="nav-link {{ request()->routeIs('check-status') ? 'active' : '' }} text-dark hover:text-gray-800 py-2">COMPROBAR ESTADO</a>
                <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }} text-dark hover:text-gray-800 py-2">NUESTROS SERVICIOS</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} text-dark hover:text-gray-800 py-2">SOBRE NOSOTROS</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} text-dark hover:text-gray-800 py-2">CONTÁCTENOS</a>
                
                @auth
                    <div class="flex items-center py-2">
                        <span class="mr-2">
                            <img src="{{ asset(auth()->user()->avatar) }}" alt="Avatar de usuario" class="w-8 h-8 rounded-full">
                        </span>
                        <span class="mr-2">Hola, {{ auth()->user()->username ?: auth()->user()->email }}</span>
                        <a href="{{ route('logout') }}" class="ml-2" onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                            <i class="fa fa-power-off"></i>
                        </a>
                        <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="nav-link text-dark hover:text-gray-800 py-2">LOGIN</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- Script para el menú móvil -->
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
@endpush