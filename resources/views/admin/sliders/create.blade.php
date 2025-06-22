@extends('layouts.app')

@section('title', 'Ajouter un Slider')

@section('content')
<div style="max-width: 800px; margin: 40px auto; padding: 0 20px; font-family: 'Roboto', sans-serif;">
    <h1 style="font-size: 2rem; margin-bottom: 30px; color: #2d3748;">Ajouter un Slider</h1>

    <form method="POST" action="{{ route('admin.sliders.store') }}" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.05);">
        @csrf

        <div style="margin-bottom: 20px;">
            <label for="image" style="display:block; font-weight: bold; margin-bottom: 6px;">Image (URL)</label>
            <input type="text" id="image" name="image" required style="width: 100%; padding: 12px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="title" style="display:block; font-weight: bold; margin-bottom: 6px;">Titre</label>
            <input type="text" id="title" name="title" required style="width: 100%; padding: 12px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="description" style="display:block; font-weight: bold; margin-bottom: 6px;">Description</label>
            <textarea id="description" name="description" style="width: 100%; padding: 12px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem; min-height: 100px;"></textarea>
        </div>

        <div style="margin-bottom: 30px;">
            <label for="status" style="display:block; font-weight: bold; margin-bottom: 6px;">Statut</label>
            <select name="status" id="status" style="width: 100%; padding: 12px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;">
                <option value="1">Actif</option>
                <option value="0">Inactif</option>
            </select>
        </div>

        <button type="submit" class="btn">✅ Enregistrer</button>
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
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn:hover {
        background-color: #a88939;
    }
</style>
@endpush
