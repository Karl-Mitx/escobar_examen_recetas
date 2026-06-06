@extends('layouts.app')

@section('title')
    Catalogo de Recetas
@endsection

@section('content')
    <h1>Catalogo de Recetas</h1>

    @forelse($recipes as $recipe)
        <article style="margin-bottom: 1.5rem; padding: 1rem; background: #fff; border-radius: 8px; border: 1px solid #e2e8f0;">
            <h2>{{ $recipe->title }}</h2>
            <p><strong>Categoría:</strong> {{ $recipe->category }}</p>
            <p><strong>Tiempo de preparación:</strong> {{ $recipe->preparation_time }}</p>
            <p><strong>Chef:</strong> {{ optional($recipe->chef)->name ?? 'Sin chef asignado' }}</p>
        </article>
    @empty
        <p>No hay recetas registradas.</p>
    @endforelse
@endsection
