@extends('layouts.app')

@section('title', 'Liste des Facilities')

@section('content')
<div style="max-width: 1100px; margin: 40px auto; padding: 0 20px; font-family: 'Roboto', sans-serif;">

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.dashboard') }}" class="btn" style="background-color: #6c757d;">⬅ Retour au Dashboard</a>
    </div>

    <h1 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">🏗️ Liste des Facilities</h1>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.facilities.create') }}" class="btn">➕ Ajouter une Facility</a>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border-radius: 8px; overflow: hidden;">
            <thead style="background-color: #f4f4f4; text-align: left;">
                <tr>
                    <th style="padding: 12px 16px;">Image</th>
                    <th style="padding: 12px 16px;">Nom</th>
                    <th style="padding: 12px 16px;">Description</th>
                    <th style="padding: 12px 16px;">Couleur Fond</th>
                    <th style="padding: 12px 16px;">Couleur Texte</th>
                    <th style="padding: 12px 16px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facilities as $facility)
                    <tr style="border-top: 1px solid #eee;">
                        <td style="padding: 12px 16px;">
                            <img src="{{ $facility->image }}" alt="facility" style="width: 100px; border-radius: 6px;">
                        </td>
                        <td style="padding: 12px 16px;">{{ $facility->name }}</td>
                        <td style="padding: 12px 16px;">{{ $facility->description }}</td>
                        <td style="padding: 12px 16px;">
                            <span style="padding: 6px 12px; border-radius: 6px; background-color: {{ $facility->bg_color }}; color: white;">
                                {{ $facility->bg_color }}
                            </span>
                        </td>
                        <td style="padding: 12px 16px;">
                            <span style="padding: 6px 12px; border-radius: 6px; background-color: #eee; color: {{ $facility->text_color }};">
                                {{ $facility->text_color }}
                            </span>
                        </td>
                        <td style="padding: 12px 16px;">
                            <a href="{{ route('admin.facilities.edit', $facility->id) }}" style="margin-right: 10px; text-decoration: none; font-size: 1rem;">✏️ Modifier</a>
                            <form action="{{ route('admin.facilities.destroy', $facility->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Supprimer ?')" style="background: none; border: none; font-size: 1rem; cursor: pointer;">🗑️ Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if($facilities->isEmpty())
                    <tr>
                        <td colspan="6" style="padding: 16px; text-align: center; color: #777;">Aucune facility trouvée.</td>
                    </tr>
                @endif
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
    }
    .btn:hover {
        background-color: #a88939;
    }
</style>
@endpush
