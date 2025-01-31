@extends('layouts.app')
@section('title','Ajouter Famille')
@section('content')

    <div class="container">
        <form action="{{route('familles.store')}}" method="POST">
            @csrf

            <label for="nom_famille" class="form-label">famille</label>
            <input type="text" class="form-control" name="nom_famille" id="nom_famille" required>

            <br>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
