@extends('layouts.app')
@section('title','Liste des familles')
@section('content')
<div class="container">
        <a href="{{route('familles.create')}}" class="btn btn-primary">Ajouter Famille</a>


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Famille</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($familles as $famille)
            <tr>

                <td>{{$famille->id}}</td>
                <td>{{$famille->nom_famille}}</td>
                <td>
                    <div class="d-flex">

                        <a href="{{route('familles.edit', $famille->id)}}" class="btn btn-warning"> <i class="bi bi-pencil"></i></a>
                        <form action="{{route('familles.destroy', $famille->id)}}" method="POST" onsubmit="return confirm('Etes-vous s��r de vouloir supprimer cet famille?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
