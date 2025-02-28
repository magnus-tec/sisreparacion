@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-xl rounded-xl overflow-hidden">
        <!-- Header con gradiente -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 py-6 px-6">
            <h2 class="text-3xl font-bold text-white text-center">Bienvenido a Soluciones Mundotech</h2>
        </div>
        
        <div class="p-8">
            <!-- Mensaje de bienvenida con animación sutil -->
            <div class="text-center mb-8 transform hover:scale-105 transition duration-300">
                <p class="text-xl text-gray-700 font-medium">¡Gracias por confiar en nosotros!</p>
            </div>
            
            <!-- Servicios con mejor diseño y iconos -->
            <div class="flex items-center justify-center mb-10">
                <div class="bg-blue-50 border-2 border-blue-200 rounded-lg p-5 shadow-md max-w-2xl">
                    <div class="flex items-center justify-center gap-3 mb-3">
                        <span class="text-2xl">🖥️</span>
                        <h3 class="text-xl font-semibold text-blue-800">Nuestros Servicios</h3>
                        <span class="text-2xl">💻</span>
                    </div>
                    <p class="text-center text-blue-900 font-medium leading-relaxed">
                        Servicio técnico especializado en laptops multimarca, MacBook, All in one, PC, PlayStation y equipos gamer's
                    </p>
                    
                    <!-- Badges de servicios -->
                    <div class="flex flex-wrap justify-center gap-2 mt-4">
                        <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Laptops</span>
                        <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">MacBook</span>
                        <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">PC</span>
                        <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">PlayStation</span>
                        <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Equipos Gamer</span>
                    </div>
                </div>
            </div>
            
            <!-- Aviso importante con mejor diseño -->
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-8 rounded-r-lg shadow-md">
                <div class="flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <p class="font-bold text-lg text-yellow-700">IMPORTANTE:</p>
                </div>
                <p class="text-yellow-800 leading-relaxed">
                    La revisión de su equipo va a depender de los trabajos que se tenga pendiente. Una vez reparado su equipo, 
                    se recomienda tener en prueba entre uno a tres días hábiles para poder garantizar el correcto funcionamiento de su equipo.
                </p>
            </div>
            
            <!-- Imagen con mejor presentación -->
            <div class="flex justify-center">
                <div class="relative group">
                    <img src="{{ asset('images/repair.jpg') }}" alt="Reparación de equipos" class="rounded-lg shadow-lg max-w-md object-cover transform group-hover:scale-[1.02] transition duration-300">
                    <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="absolute bottom-4 left-0 right-0 text-center text-white font-medium opacity-0 group-hover:opacity-100 transition duration-300">
                        Servicio técnico profesional
                    </div>
                </div>
            </div>
            
            <!-- Información de contacto -->
            <div class="mt-10 text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">¿Necesitas ayuda con tu equipo?</h3>
                <p class="text-gray-600 mb-4">Estamos aquí para ayudarte con cualquier problema técnico</p>
                <a href="#contacto" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300 transform hover:-translate-y-1">
                    Contáctanos
                </a>
            </div>
        </div>
        
      
    </div>
</div>
@endsection