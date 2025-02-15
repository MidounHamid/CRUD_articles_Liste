@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Add Article') <!-- Define the title section -->

@section('content') <!-- Define the content section -->


@php
$familles = App\Models\Famille::all();
@endphp

<div class="container mt-4">
    <h2 class="text-center mb-4">Add Article</h2>

    <form action="{{ route('articles.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
        @csrf

        <label for="famille_id">Famille</label>
        <select name="famille_id" id="famille_id" class="form-control" >
            @foreach($familles as $famille)
                <option value="{{$famille->id }}">{{ $famille->nom_famille }}</option>
            @endforeach
        </select>

        <!-- designation -->
        <div class="col-md-6">
            <label for="designation" class="form-label">designation:</label>
            <input type="text" name="designation" id="designation" class="form-control" >
            @error("designation")
            {{$message}}
            @enderror
        </div>

        <!-- prix_ht -->
        <div class="col-md-6">
            <label for="prix_ht" class="form-label">prix_ht:</label>
            <input type="text" name="prix_ht" id="prix_ht" class="form-control" >
        </div>

        <!-- tva -->
        <div class="col-md-12">
            <label for="tva" class="form-label">tva:</label>
            <input type="text" name="tva" id="tva" class="form-control" >
        </div>

        <!-- stock -->
        <div class="col-md-6">
            <label for="stock" class="form-label">stock:</label>
            <input type="text" name="stock" id="stock" class="form-control" >
        </div>


        <!-- Submit Button -->
        <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection
