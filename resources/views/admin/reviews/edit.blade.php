@extends('layouts.app')

@section('title', 'Modifier la Revue')

@section('content')
<div style="max-width: 700px; margin: 40px auto; padding: 0 20px; font-family: 'Roboto', sans-serif;">

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.dashboard') }}" class="btn" style="background-color: #6c757d;">⬅ Retour au Dashboard</a>
    </div>

    <h1 style="font-size: 2rem; margin-bottom: 30px; color: #2d3748;">✏️ Modifier la Revue</h1>

    @if ($errors->any())
        <div style="background-color: #ffcdd2; color: #b71c1c; padding: 15px 20px; border-radius: 8px; margin-bottom: 20px;">
            <ul style="list-style: disc; margin-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST"
          style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.05);">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 20px;">
            <label for="author" style="display: block; font-weight: 600; margin-bottom: 8px;">Nom de l'auteur</label>
            <input type="text" id="author" name="author" value="{{ old('author', $review->author) }}" required
                style="width: 100%; padding: 12px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="content" style="display: block; font-weight: 600; margin-bottom: 8px;">Contenu de la revue</label>
            <textarea id="content" name="content" rows="4" required
                style="width: 100%; padding: 12px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;">{{ old('content', $review->content) }}</textarea>
        </div>

        <div style="margin-bottom: 30px;">
            <label for="rating" style="display: block; font-weight: 600; margin-bottom: 8px;">Note (sur 5)</label>
            <input type="number" id="rating" name="rating" min="1" max="5" value="{{ old('rating', $review->rating) }}" required
                style="width: 100%; padding: 12px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;">
        </div>

        <button type="submit" class="btn">💾 Mettre à jour</button>
    </form>
</div>
@endsection

@push('styles')
<style>
    .btn {
        background-color: #c9a94a;
        color: white;
        border: none;
        padding: 12px 28px;
        border-radius: 25px;
        font-weight: bold;
        font-size: 1rem;
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }
    .btn:hover {
        background-color: #a88939;
    }
</style>
@endpush
