@extends('layouts.app')

@section('title', 'Ajouter un Slider')

@section('content')
<div class="form-container">
    <h1 class="form-header">📷 Nouveau Slider</h1>
<form method="POST" action="{{ route('admin.sliders.store') }}" enctype="multipart/form-data" class="custom-form">

        @csrf

        <div class="input-group">
            <label for="image"><i class="fas fa-image"></i> Image</label>
            <input type="file" id="image" name="image" required>
        </div>

        <div class="input-group">
            <label for="title"><i class="fas fa-heading"></i> Titre</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="input-group">
            <label for="description"><i class="fas fa-align-left"></i> Description</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div class="input-group">
            <label for="status"><i class="fas fa-toggle-on"></i> Statut</label>
            <select name="status" id="status">
                <option value="1">✅ Actif</option>
                <option value="0">⛔ Inactif</option>
            </select>
        </div>

        <button type="submit" class="submit-btn"><i class="fas fa-check-circle"></i> Enregistrer</button>
    </form>

</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@endsection

@push('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<style>
    body {
        background: linear-gradient(120deg, #f6f9fc, #e0eafc);
        font-family: 'Poppins', sans-serif;
    }

    .form-container {
        max-width: 550px;
        margin: 60px auto;
        background-color: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .form-header {
        text-align: center;
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 30px;
        color: #4b5563;
    }

    .custom-form .input-group {
        margin-bottom: 22px;
    }

    .custom-form label {
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
        color: #374151;
    }

    .custom-form input,
    .custom-form select,
    .custom-form textarea {
        width: 100%;
        padding: 12px 14px;
        border: 1.5px solid #d1d5db;
        border-radius: 10px;
        font-size: 1rem;
        background-color: #f9fafb;
        transition: 0.3s border-color ease;
    }

    .custom-form input:focus,
    .custom-form textarea:focus,
    .custom-form select:focus {
        border-color: #6366f1;
        outline: none;
        background-color: #fff;
    }

    .custom-form textarea {
        min-height: 110px;
        resize: vertical;
    }

    .submit-btn {
        display: block;
        width: 100%;
        background: linear-gradient(to right, #6366f1, #8b5cf6);
        color: white;
        padding: 14px;
        border: none;
        border-radius: 40px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .submit-btn:hover {
        background: linear-gradient(to right, #4f46e5, #7c3aed);
    }

    .fas {
        margin-right: 8px;
    }
</style>
@endpush
