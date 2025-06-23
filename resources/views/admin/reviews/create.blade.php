@extends('layouts.app')

@section('title', 'Ajouter une Revue')

@section('content')
<div class="review-form-wrapper">
    <h1 class="review-title">📝 Ajouter une nouvelle revue</h1>

    @if ($errors->any())
        <div class="alert alert-danger custom-alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulaire --}}
    <form action="{{ route('admin.reviews.store') }}" method="POST" class="review-form">
        @csrf

        <div class="form-group">
            <label for="author">👤 Nom de l'auteur</label>
            <input type="text" name="author" id="author" value="{{ old('author') }}" required>
        </div>

        <div class="form-group">
            <label for="content">💬 Contenu</label>
            <textarea name="content" id="content" rows="4" required>{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="rating">⭐ Note (sur 5)</label>
            <input type="number" name="rating" id="rating" min="1" max="5" value="{{ old('rating') }}" required>
        </div>

        <button type="submit" class="submit-btn">✅ Enregistrer</button>
    </form>
</div>
@endsection

@push('styles')
<style>
    body {
        background: linear-gradient(to right, #f8fafc, #e0f2fe);
        font-family: 'Segoe UI', sans-serif;
    }

    .review-form-wrapper {
        max-width: 600px;
        margin: 60px auto;
        padding: 35px;
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    }

    .review-title {
        text-align: center;
        font-size: 1.8rem;
        color: #2d3748;
        margin-bottom: 30px;
    }

    .review-form .form-group {
        margin-bottom: 22px;
    }

    .review-form label {
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
        color: #374151;
    }

    .review-form input,
    .review-form textarea {
        width: 100%;
        padding: 12px;
        border: 1.5px solid #d1d5db;
        border-radius: 10px;
        font-size: 1rem;
        background-color: #f9fafb;
        transition: border-color 0.3s ease;
    }

    .review-form input:focus,
    .review-form textarea:focus {
        border-color: #6366f1;
        outline: none;
        background-color: #fff;
    }

    .submit-btn {
        background-color: #3b82f6;
        color: #fff;
        padding: 12px;
        width: 100%;
        border: none;
        border-radius: 30px;
        font-weight: bold;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #2563eb;
    }

    .custom-alert {
        border-radius: 12px;
        padding: 12px;
        font-size: 0.95rem;
    }
</style>
@endpush
