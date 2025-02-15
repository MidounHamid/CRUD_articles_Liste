@extends('layouts.app')
@section('title','Modifier famille')
@section('content')

    <div class="container">
        <h2 class="text-center mb-4">Modifier famille</h2>

        <form action="{{route('familles.update',$famille->id)}}" method="POST">
            @csrf
            @method('PUT')


            <label for="famille" class="form-label">Famille</label>
            <input type="text" class="form-control" name="nom_famille" id="nom_famille" required value={{$famille->nom_famille}}>


            <br>
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </div>
    @endsection
