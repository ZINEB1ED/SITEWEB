@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 40px auto; font-family: 'Roboto', sans-serif;">

    <h1 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">✏️ Modifier la Classe</h1>

    <form method="POST" action="{{ route('admin.classes.update', $webClasse->id) }}">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 20px;">
            <label for="name" style="display: block; font-weight: 600; margin-bottom: 8px;">Nom</label>
            <input 
                type="text" 
                name="name" 
                id="name"
                value="{{ old('name', $webClasse->name) }}" 
                required
                style="width: 100%; padding: 10px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;"
            >
        </div>

        <div style="margin-bottom: 20px;">
            <label for="description" style="display: block; font-weight: 600; margin-bottom: 8px;">Description</label>
            <textarea 
                name="description" 
                id="description" 
                style="width: 100%; padding: 10px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem; min-height: 120px;"
            >{{ old('description', $webClasse->description) }}</textarea>
        </div>

        <div style="margin-bottom: 30px;">
            <label for="image" style="display: block; font-weight: 600; margin-bottom: 8px;">Image (URL)</label>
            <input 
                type="text" 
                name="image" 
                id="image"
                value="{{ old('image', $webClasse->image) }}" 
                style="width: 100%; padding: 10px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;"
            >
        </div>

        <button 
            type="submit" 
            style="background-color: #c9a94a; color: white; border: none; padding: 12px 30px; border-radius: 25px; font-weight: bold; font-size: 1rem; cursor: pointer; transition: background-color 0.3s ease;"
            onmouseover="this.style.backgroundColor='#a88939'" 
            onmouseout="this.style.backgroundColor='#c9a94a'"
        >
            Mettre à jour
        </button>
    </form>
</div>
@endsection
