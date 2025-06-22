{{-- resources/views/admin/classe/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Ajouter une Classe</h1>

    <form method="POST" action="{{ route('admin.classes.store') }}">
        @csrf

        {{-- حقل الاسم --}}
        <div>
            <label>Nom</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        {{-- حقل الوصف --}}
        <div>
            <label>Description</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        {{-- حقل الصورة (رابط URL أو اسم ملف) --}}
        <div>
            <label>Image (URL)</label>
            <input type="text" name="image" value="{{ old('image') }}">
        </div>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
