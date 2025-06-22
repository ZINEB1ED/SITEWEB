@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 40px auto; font-family: 'Roboto', sans-serif;">

    <h1 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">✏️ Modifier la Facility</h1>

    <form action="{{ route('admin.facilities.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 20px;">
            <label for="name" style="display: block; font-weight: 600; margin-bottom: 8px;">Nom</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ old('name', $facility->name) }}" 
                required
                style="width: 100%; padding: 10px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;"
            >
        </div>

        <div style="margin-bottom: 20px;">
            <label for="description" style="display: block; font-weight: 600; margin-bottom: 8px;">Description</label>
            <textarea 
                id="description" 
                name="description" 
                style="width: 100%; padding: 10px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem; min-height: 120px;"
            >{{ old('description', $facility->description) }}</textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="image" style="display: block; font-weight: 600; margin-bottom: 8px;">Image</label>
            <input 
                type="file" 
                id="image" 
                name="image" 
                style="width: 100%; padding: 10px; border: 1.5px solid #ccc; border-radius: 8px; font-size: 1rem;"
            >
            @if($facility->image)
                <img src="{{ asset('storage/' . $facility->image) }}" alt="Image actuelle" style="margin-top: 10px; max-width: 100px;">
            @endif
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
