@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-semibold mb-6">Bienvenido a {{ $systemInfo->getValue('name') }}</h1>

<!-- Primera fila de estadísticas -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <!-- Servicios -->
    <div class="stat-card">
        <div class="stat-icon bg-cyan-100 text-cyan-500">
            <i class="fas fa-th-list text-xl"></i>
        </div>
        <div class="ml-4">
            <h2 class="text-gray-600 text-sm">Servicios</h2>
            <p class="text-2xl font-semibold">{{ $services_count }}</p>
        </div>
    </div>

    <!-- Total de clientes -->
    <div class="stat-card">
        <div class="stat-icon bg-blue-100 text-blue-500">
            <i class="fas fa-users text-xl"></i>
        </div>
        <div class="ml-4">
            <h2 class="text-gray-600 text-sm">Total de clientes</h2>
            <p class="text-2xl font-semibold">{{ $clients_count }}</p>
        </div>
    </div>

    <!-- Reparaciones pendientes -->
    <div class="stat-card">
        <div class="stat-icon bg-gray-100 text-gray-500">
            <i class="fas fa-tools text-xl"></i>
        </div>
        <div class="ml-4">
            <h2 class="text-gray-600 text-sm">Reparaciones pendientes</h2>
            <p class="text-2xl font-semibold">{{ $pending_repairs }}</p>
        </div>
    </div>

    <!-- Reparaciones Entregadas -->
    <div class="stat-card">
        <div class="stat-icon bg-green-100 text-green-500">
            <i class="fas fa-check text-xl"></i>
        </div>
        <div class="ml-4">
            <h2 class="text-gray-600 text-sm">Reparaciones Entregadas</h2>
            <p class="text-2xl font-semibold">{{ $delivered_repairs }}</p>
        </div>
    </div>
</div>

<!-- Segunda fila de estadísticas -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Reparaciones en progreso -->
    <div class="stat-card">
        <div class="stat-icon bg-cyan-100 text-cyan-500">
            <i class="fas fa-cog text-xl"></i>
        </div>
        <div class="ml-4">
            <h2 class="text-gray-600 text-sm">Reparaciones en progreso</h2>
            <p class="text-2xl font-semibold">{{ $in_progress_repairs }}</p>
        </div>
    </div>

    <!-- Devoluciones -->
    <div class="stat-card">
        <div class="stat-icon bg-yellow-100 text-yellow-500">
            <i class="fas fa-undo text-xl"></i>
        </div>
        <div class="ml-4">
            <h2 class="text-gray-600 text-sm">Devoluciones</h2>
            <p class="text-2xl font-semibold">{{ $returned_repairs }}</p>
        </div>
    </div>

    <!-- Reparaciones Realizadas -->
    <div class="stat-card">
        <div class="stat-icon bg-green-100 text-green-500">
            <i class="fas fa-check-double text-xl"></i>
        </div>
        <div class="ml-4">
            <h2 class="text-gray-600 text-sm">Reparaciones Realizadas</h2>
            <p class="text-2xl font-semibold">{{ $completed_repairs }}</p>
        </div>
    </div>

    <!-- Reparaciones canceladas -->
    <div class="stat-card">
        <div class="stat-icon bg-red-100 text-red-500">
            <i class="fas fa-times text-xl"></i>
        </div>
        <div class="ml-4">
            <h2 class="text-gray-600 text-sm">Reparaciones canceladas</h2>
            <p class="text-2xl font-semibold">{{ $cancelled_repairs }}</p>
        </div>
    </div>
</div>

<!-- Imagen de portada -->
<div class="mt-6">
    <img src="images/cover.png" alt="cover">
</div>
@endsection