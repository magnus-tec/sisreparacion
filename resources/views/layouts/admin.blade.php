<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $systemInfo->getValue('name') }}</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="w-64 bg-black text-white">
            <div class="flex items-center p-4 bg-[#01E4FF]">
                <img src="{{ asset($systemInfo->getValue('logo')) }}" alt="Logo"
                    class="w-8 h-8 mr-2 bg-white rounded-full object-contain">
                <span class="text-black font-semibold">{{ $systemInfo->getValue('short_name') }}</span>
            </div>

            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-2 hover:bg-gray-800 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-tachometer-alt mr-2"></i>
                    <span>PANEL</span>
                </a>

                <a href="{{ route('admin.repairs.index') }}"
                    class="flex items-center px-4 py-2 hover:bg-gray-800 {{ request()->routeIs('admin.repairs.*') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-microchip mr-2"></i>
                    <span>LISTA DE REPARACIONES</span>
                </a>

                <a href="{{ route('admin.clients.index') }}"
                    class="flex items-center px-4 py-2 hover:bg-gray-800 {{ request()->routeIs('admin.clients.*') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-users mr-2"></i>
                    <span>LISTA DE CLIENTES</span>
                </a>

                <a href="{{ route('admin.inquiries.index') }}"
                    class="flex items-center px-4 py-2 hover:bg-gray-800 {{ request()->routeIs('admin.inquiries.*') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-question-circle mr-2"></i>
                    <span>CONSULTAS</span>
                </a>
                

                @if(auth()->user()->isAdmin())
                <div class="mt-4 px-4 text-gray-400 text-sm">Facturacion</div>
                <a href="{{ route('admin.services.index') }}"
                        class="flex items-center px-4 py-2 hover:bg-gray-800 {{ request()->routeIs('admin.services.*') ? 'bg-gray-800' : '' }}">
                        <i class="fas fa-th-list mr-2"></i>
                        <span>FACTURAR</span>
                    </a>
                    <div class="mt-4 px-4 text-gray-400 text-sm">Mantenimiento</div>

                    <a href="{{ route('admin.services.index') }}"
                        class="flex items-center px-4 py-2 hover:bg-gray-800 {{ request()->routeIs('admin.services.*') ? 'bg-gray-800' : '' }}">
                        <i class="fas fa-th-list mr-2"></i>
                        <span>LISTA DE SERVICIOS</span>
                    </a>

                    <a href="{{ route('admin.users.index') }}"
                        class="flex items-center px-4 py-2 hover:bg-gray-800 {{ request()->routeIs('admin.users.*') ? 'bg-gray-800' : '' }}">
                        <i class="fas fa-users-cog mr-2"></i>
                        <span>LISTA DE USUARIOS</span>
                    </a>

                    <a href="{{ route('admin.settings') }}"
                        class="flex items-center px-4 py-2 hover:bg-gray-800 {{ request()->routeIs('admin.settings') ? 'bg-gray-800' : '' }}">
                        <i class="fas fa-cogs mr-2"></i>
                        <span>AJUSTES</span>
                    </a>
                    @endif
                
            </nav>
        </aside>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top bar -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between p-4">
                    <h1 class="text-xl font-semibold">{{ $systemInfo->getValue('name') }}</h1>
                    <div class="flex items-center">
                        <span class="mr-4">{{ auth()->user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-sign-out-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Main content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @stack('modals')
    @stack('scripts')
</body>

</html>