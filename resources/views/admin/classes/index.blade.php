@extends('layouts.app')

@section('content')
<div style="max-width: 1100px; margin: 40px auto; padding: 0 20px; font-family: 'Roboto', sans-serif;">

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.dashboard') }}" class="btn" style="background-color: #6c757d;">⬅ Retour au Dashboard</a>
    </div>

    <h1 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">🏫 Liste des Classes</h1>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.classes.create') }}" class="btn">➕ Ajouter une nouvelle Classe</a>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border-radius: 8px; overflow: hidden;">
            <thead style="background-color: #f4f4f4; text-align: left;">
                <tr>
                    <th style="padding: 12px 16px;">ID</th>
                    <th style="padding: 12px 16px;">Nom</th>
                    <th style="padding: 12px 16px;">Description</th>
                    <th style="padding: 12px 16px;">Image</th>
                    <th style="padding: 12px 16px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classes as $classe)
                    <tr style="border-top: 1px solid #eee;">
                        <td style="padding: 12px 16px;">{{ $classe->id }}</td>
                        <td style="padding: 12px 16px;">{{ $classe->name }}</td>
                        <td style="padding: 12px 16px;">{{ $classe->description }}</td>
                        <td style="padding: 12px 16px;">
                            @if ($classe->image)
                                <img src="{{ $classe->image }}" alt="{{ $classe->name }}" style="width: 100px; border-radius: 6px;">
                            @else
                                <span style="color: #777; font-style: italic;">Aucun</span>
                            @endif
                        </td>
                        <td style="padding: 12px 16px;">
                            <a href="{{ route('admin.classes.edit', $classe->id) }}" style="margin-right: 10px; text-decoration: none; font-weight: bold; color: #2c3e50;">✏️ Modifier</a>
                            <form action="{{ route('admin.classes.destroy', $classe->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Êtes-vous sûr ?')" style="background: none; border: none; color: #b71c1c; cursor: pointer; font-weight: bold;">🗑️ Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="padding: 16px; text-align: center; color: #777;">Aucune classe trouvée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<style>
    .btn {
        background-color: #c9a94a;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
        font-size: 1rem;
        text-decoration: none;
        transition: background-color 0.3s ease;
        display: inline-block;
    }
    .btn:hover {
        background-color: #a88939;
    }
</style>
@endpush
