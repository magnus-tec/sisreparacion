@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 my-8">
        <!-- Información de contacto -->
        <div class="md:col-span-5">
            <div class="bg-white rounded-lg shadow-md border border-gray-200">
                <div class="border-b border-gray-200 p-4">
                    <h4 class="text-xl font-semibold">Contacto</h4>
                </div>
                <div class="p-4">
                    <dl class="space-y-4">
                        <div>
                            <dt class="text-gray-500 flex items-center">
                                <i class="fa fa-envelope mr-2"></i>
                                Correo electrónico
                            </dt>
                            <dd class="pr-4 font-medium">{{ config('settings.email') }}</dd>
                        </div>
                        
                        <div>
                            <dt class="text-gray-500 flex items-center">
                                <i class="fa fa-phone mr-2"></i>
                                Número de Contacto
                            </dt>
                            <dd class="pr-4 font-medium">{{ config('settings.contact') }}</dd>
                        </div>
                        
                        <div>
                            <dt class="text-gray-500 flex items-center">
                                <i class="fa fa-map-marker-alt mr-2"></i>
                                Ubicación
                            </dt>
                            <dd class="pr-4 font-medium">{{ config('settings.address') }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        
        <!-- Sobre Nosotros -->
        <div class="md:col-span-7">
            <div class="bg-white rounded-lg shadow-md border border-gray-200">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-center mb-4">Sobre Nosotros</h2>
                    <hr class="border-blue-800 w-1/4 mx-auto border-2 mb-6">
                    
                    <div class="prose max-w-none">
                        {!! file_get_contents(resource_path("views/about_us.html")) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection