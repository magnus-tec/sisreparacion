<!DOCTYPE html>
<html lang="es" class="h-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Soluciones MundoTech') }}</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Estilos adicionales -->
    <style>
        #header {
            height: 70vh;
            width: 100%;
            position: relative;
            top: -1em;
        }
        
        #header:before {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            background-image: url({{ asset(('images/cover.png')) }});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        
        #header > div {
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: 2;
        }
        
        .nav-link.active {
            font-weight: 900;
            position: relative;
        }
        
        .nav-link.active:before {
            content: "";
            position: absolute;
            border-bottom: 2px solid #000;
            width: 33.33%;
            left: 33.33%;
            bottom: 0;
        }
    </style>
    
    @stack('styles')
</head>
<body class="min-h-screen flex flex-col">
    <div class="wrapper flex flex-col min-h-screen">
        @include('layouts.navigation')
        
        <!-- Mensajes flash -->
        @if(session('success'))
            <div id="alert-toast" class="fixed top-20 right-4 z-50 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md">
                <div class="flex">
                    <div class="py-1">
                        <svg class="h-6 w-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">¡Éxito!</p>
                        <p class="text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('alert-toast').style.display = 'none';
                }, 5000);
            </script>
        @endif
        
        <!-- Contenido principal -->
        <div class="content-wrapper pt-20 flex-grow">
            @if(request()->routeIs('home') || request()->routeIs('about'))
                <div id="header" class="shadow mb-4">
                    <div class="flex justify-center h-full w-full items-center flex-col px-3">
             <h3 class="w-full text-center site-title px-5 hidden sm:block">{{ $systemInfo->getValue('name') }}</h3>
                        <h3 class="w-full text-center px-5 block sm:hidden site-title2">{{ config('app.name') }}</h3>
                    </div>
                </div>
            @endif
            
            <!-- Contenido principal -->
            <main class="container mx-auto px-4 py-8">
                @yield('content')
            </main>
        </div>
        
        <!-- Modales -->
        @include('components.modals.confirm-modal')
        @include('components.modals.uni-modal')
        @include('components.modals.viewer-modal')
        
        <!-- Footer -->
        @include('layouts.footer')
    </div>
    
    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Funciones para modales
            window.viewer_modal = function(src = '') {
                const modal = document.getElementById('viewer-modal');
                const modalContent = modal.querySelector('.modal-content');
                
                // Limpiar contenido previo
                modalContent.innerHTML = '';
                
                // Determinar tipo de contenido
                const fileType = src.split('.').pop();
                
                if (fileType === 'mp4') {
                    const view = document.createElement('video');
                    view.src = src;
                    view.controls = true;
                    view.autoplay = true;
                    modalContent.appendChild(view);
                } else {
                    const view = document.createElement('img');
                    view.src = src;
                    modalContent.appendChild(view);
                }
                
                // Mostrar modal
                modal.classList.remove('hidden');
            };
            
            window.uni_modal = function(title = '', url = '', size = '') {
                const modal = document.getElementById('uni-modal');
                const modalTitle = modal.querySelector('.modal-title');
                const modalBody = modal.querySelector('.modal-body');
                const modalDialog = modal.querySelector('.modal-dialog');
                
                // Establecer título
                modalTitle.textContent = title;
                
                // Cargar contenido
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        modalBody.innerHTML = html;
                        
                        // Ajustar tamaño
                        modalDialog.className = 'modal-dialog';
                        if (size) {
                            modalDialog.classList.add(size, 'modal-dialog-centered');
                        } else {
                            modalDialog.classList.add('modal-md', 'modal-dialog-centered');
                        }
                        
                        // Mostrar modal
                        modal.classList.remove('hidden');
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Ocurrió un error');
                    });
            };
            
            window._conf = function(msg = '', func = '', params = []) {
                const modal = document.getElementById('confirm-modal');
                const confirmBtn = document.getElementById('confirm');
                const modalBody = modal.querySelector('.modal-body');
                
                // Establecer mensaje
                modalBody.innerHTML = msg;
                
                // Configurar botón de confirmación
                confirmBtn.setAttribute('onclick', func + '(' + params.join(',') + ')');
                
                // Mostrar modal
                modal.classList.remove('hidden');
            };
            
            // Cerrar modales
            document.querySelectorAll('.modal .close-modal').forEach(button => {
                button.addEventListener('click', function() {
                    this.closest('.modal').classList.add('hidden');
                });
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>