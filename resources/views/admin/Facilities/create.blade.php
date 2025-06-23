@extends('layouts.app')

@section('content')
<div class="facility-wrapper">

    <h2 class="section-title">Ajouter une nouvelle facility</h2>

    <form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data" class="facility-form">
        @csrf

        <div class="form-field">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-field">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3" required></textarea>
        </div>

        <div class="form-field">
            <label for="image">Image (fichier)</label>
            <input type="file" name="image" id="image">
        </div>

        <div class="color-fields">
            <div class="form-color">
                <label for="bg_color">Couleur de fond</label>
                <input type="color" name="bg_color" id="bg_color">
            </div>
            <div class="form-color">
                <label for="text_color">Couleur du texte</label>
                <input type="color" name="text_color" id="text_color">
            </div>
        </div>

        <button type="submit" class="submit-btn">💾 Enregistrer</button>
    </form>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</div>
@endsection

@push('styles')
<style>
    .facility-wrapper {
        max-width: 1000px;
        margin: 50px auto;
        padding: 30px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        backdrop-filter: blur(10px);
        font-family: 'Segoe UI', sans-serif;
    }

    .section-title {
        font-size: 1.7rem;
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 25px;
        text-align: center;
    }

    .facility-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-field label {
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
        color: #444;
    }

    .form-field input[type="text"],
    .form-field textarea,
    .form-field input[type="file"] {
        width: 100%;
        padding: 12px;
        border: 1.5px solid #ccc;
        border-radius: 10px;
        font-size: 1rem;
        background-color: #fff;
    }

    .color-fields {
        display: flex;
        gap: 20px;
    }

    .form-color label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-color input[type="color"] {
        width: 100%;
        height: 50px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }

    .submit-btn {
        background-color: #c9a94a;
        color: white;
        padding: 12px;
        font-weight: bold;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #a88939;
    }
</style>
@endpush
