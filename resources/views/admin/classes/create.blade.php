@extends('layouts.app')

@section('content')
<div class="classe-form-container">
    <h1 class="form-title">📚 Ajouter une Classe</h1>

    <form method="POST" action="{{ route('admin.classes.store') }}" enctype="multipart/form-data" class="classe-form">
        @csrf

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <button type="submit" class="submit-btn">✅ Enregistrer</button>
    </form>
</div>
@endsection

@push('styles')
<style>
    body {
        background-color: #f3f4f6;
        font-family: 'Segoe UI', sans-serif;
    }

    .classe-form-container {
        max-width: 600px;
        margin: 50px auto;
        background-color: white;
        padding: 35px;
        border-radius: 20px;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.08);
    }

    .form-title {
        text-align: center;
        font-size: 1.8rem;
        font-weight: 600;
        color: #374151;
        margin-bottom: 30px;
    }

    .classe-form .form-group {
        margin-bottom: 20px;
    }

    .classe-form label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: #4b5563;
    }

    .classe-form input[type="text"],
    .classe-form input[type="file"],
    .classe-form textarea {
        width: 100%;
        padding: 12px 14px;
        border: 1.5px solid #d1d5db;
        border-radius: 10px;
        background-color: #f9fafb;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .classe-form input:focus,
    .classe-form textarea:focus {
        border-color: #3b82f6;
        background-color: white;
        outline: none;
    }

    .classe-form textarea {
        min-height: 100px;
        resize: vertical;
    }

    .submit-btn {
        width: 100%;
        background-color: #d0a422;
        color: white;
        padding: 14px;
        border: none;
        border-radius: 12px;
        font-weight: bold;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #d2a51e;
    }
</style>
@endpush
