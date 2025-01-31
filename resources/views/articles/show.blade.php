@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Article Details') <!-- Define the title section -->

@section('content') <!-- Define the content section -->
<div class="container mt-4">
    <h2 class="text-center mb-4">Article Details</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nom:</strong> {{ $article->designation }}</p>
            <p><strong>Prenom:</strong> {{ $article->prix_ht }}</p>
            <p><strong>Adresse:</strong> {{ $article->tva }}</p>
            <p><strong>Ville:</strong> {{ $article->stock }}</p>

        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection
