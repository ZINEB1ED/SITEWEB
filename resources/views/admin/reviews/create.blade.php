@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une nouvelle revue</h1>

    {{-- Messages d'erreur --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulaire d'ajout --}}
    <form action="{{ route('admin.reviews.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="author">Nom de l'auteur</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ old('author') }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="content">Contenu de la revue</label>
            <textarea class="form-control" name="content" id="content" rows="4" required>{{ old('content') }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="rating">Note (sur 5)</label>
            <input type="number" class="form-control" name="rating" id="rating" min="1" max="5" value="{{ old('rating') }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
    </form>
</div>
@endsection
