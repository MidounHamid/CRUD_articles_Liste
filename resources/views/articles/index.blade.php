@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'List of Articles') <!-- Define the title section -->

@section('content') <!-- Define the content section -->
    <div class="container mt-4">
        @include('layouts.Components.Flashbag')
        <h1 class="text-center mb-4">List of Articles</h1>

        {{-- Add Article Button --}}
        <div class="mb-3">
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Add Article</a>
        </div>

        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Famile</th>
                        <th>ID</th>
                        <th>Designation</th>
                        <th>Prix_ht</th>
                        <th>Tva</th>
                        <th>Prix Ttc</th>
                        <th>Stock</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{$article->famille->nom_famille}}</td>

                            <td>{{ $article->id }}</td>
                            <td>{{ $article->designation }}</td>
                            <td>{{ $article->prix_ht }}</td>
                            <td>{{ $article->tva }}</td>
                            <td>{{$article->prix_ttc()}}</td>

                            <td>{{ $article->stock }}</td>

                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Etes-vous s��r de vouloir supprimer cet Articles?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info btn-sm">Show</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
